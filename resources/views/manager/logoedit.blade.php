@extends('admin.base')
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
{{ Form::model($logo,['route' => ['manager.logo.update',$logo],'enctype' => 'multipart/form-data','method'=>'PUT'])}}
<div class="row text-light">
  <div class="col-md-3">
    <div class="contact-info">
      <div style="display:flex;     flex-direction: column;     justify-content: center;
                border: solid gold 2px width:100%" class="images ff">
        <h6> uploaded-images</h6>
        <hr>
        <div class="myim">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <div class="contact-form">
      <div class="form-group">
        <label class="control-label col-sm-4" for="lname">Main Image:</label>
        <br>
        <div class="custom-file form-control  " style="width: 50%">
          <br>
          {!! Form::file('image', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile", 'required','onchange'=>'showimage(this)']) !!}
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

          {!! Form::submit('Update', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}

        </div>
      </div>
    </div>
  </div>
  {{ Form::close() }}
</div>
<script>
  function showimage(input) {
    console.log(input.files)
    if (input) {
      var reader = new FileReader();
      reader.onload = function(e) {
        c = $('<img></img>')
          .attr('src', e.target.result)
          .width(270)
          .height(200);
        $('.myim').append(c);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection