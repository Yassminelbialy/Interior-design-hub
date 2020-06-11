@extends('admin.base')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
{{ Form::open(['route' => 'manager.project.store','enctype' => 'multipart/form-data','method'=>'post'])}}
<div class="row text-light">
  <div class="col-md-3">
    <div class="contact-info">
      {{-- <img src="https://img.freepik.com/free-vector/abstract-book-pencil-logo_10724-10.jpg?size=338&ext=jpg" alt="image" class="imgweb"/> --}}
      {{-- <h2>Contact Us</h2>
                <h4>We would love to hear from you !</h4> --}}

      <div style="display:flex;     flex-direction: column;     justify-content: center;

                border: solid gold 2px width:60%" class="images ff">
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
        <label class="control-label col-sm-3" for="fname">Project Title:</label>
        <div class="col-sm-10">
          {!! Form::text('title', null, ['required'=>'true','class'=>"form-control",'placeholder'=>'Project Title','aria-label'=>"Book Nmae",'id'=>"fname"]) !!}

          {{-- <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname"> --}}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="lname">Project Hint:</label>
        <div class="col-sm-10">
          {!! Form::text('hint', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"Project Hint",'aria-label'=>"Book Author Nmae",'id'=>"lname"]) !!}
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="lname">Main Image:</label>
          <br>
          <div class="custom-file form-control  " style="width: 50%">
            <br>
            {!! Form::file('mainimage', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile", 'required','onchange'=>'showimage(this)']) !!} <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Category:</label>
          <div class="col-sm-10">
            {{ Form::select('category_id', $category, null, ['class'=>'form-control','required'=>'true']) }}
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">Description:</label>
          <div class="col-sm-10">
            {!! Form::textarea('description', null, ['class'=>'form-control','rows'=>"5", 'id'=>"comment",'required']) !!}
          </div>

        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">

            {!! Form::submit('ADD project', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}

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
            .width(150)
            .height(200);
          $('.myim').append(c);
          // f= $('<input></input>').attr({required:true,placeholder:'1',name:'comment[]'})
          // $('.fom').append(f);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

  @endsection
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}