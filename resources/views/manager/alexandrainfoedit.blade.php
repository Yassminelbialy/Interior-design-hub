@extends('admin.base')
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

{{ Form::model($ceoInfo,['route' => ['manager.alexandra.update',$ceoInfo],'enctype' => 'multipart/form-data','method'=>'PUT'])}}
<div class="row">
  <div class="col-md-9">
    <div class="contact-form">
      <div class="form-group">
        <label class="control-label col-sm-3" for="fname">Name:</label>
        <div class="col-sm-10">
          {!! Form::text('name', null, ['required'=>'true','class'=>"form-control",'id'=>"name"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="fname">Hint:</label>
        <div class="col-sm-10">
          {!! Form::text('hint', null, ['required'=>'true','class'=>"form-control",'id'=>"hint"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="comment">Statement:</label>
        <div class="col-sm-10">
          {!! Form::textarea('statement', null, ['class'=>'form-control','rows'=>"5", 'id'=>"comment",'required']) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="image">Image:</label>
        <br>
        <div class="custom-file form-control " style="width: 50%">
          <br>
          {!! Form::file('image', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile1"]) !!}
          <label class="custom-file-label" for="validatedCustomFile1">Choose file...</label>

        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="video">Video:</label>
        <br>
        <div class="custom-file form-control " style="width: 50%">
          <br>
          {!! Form::file('video', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile"]) !!}
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          {!! Form::submit('Edit', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}
        </div>
      </div>
    </div>
  </div>
  {{ Form::close() }}
</div>
@endsection