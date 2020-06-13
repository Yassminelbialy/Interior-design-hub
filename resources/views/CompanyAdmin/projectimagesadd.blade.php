@extends('admin.base')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
@section('adminbase')
{{ Form::open(['route' => ['manager.project.images.store',$id],'enctype' => 'multipart/form-data','method'=>'post'])}}
<div class="form-group text-light">
  <label class="control-label col-sm-4" for="lname">Image Description:</label>
  <div class="col-sm-10">
    {!! Form::text('description', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"Project Hint",'aria-label'=>"Book Author Nmae",'id'=>"lname"]) !!}
  </div>
  <label class="control-label col-sm-4" for="lname">Image Keywordes:</label>
  <div class="col-sm-10">
    {!! Form::text('keyWords', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"Write LIKE [xxxx-xxxx-xxxx-....]",'aria-label'=>"Book Author Nmae",'id'=>"lname"]) !!}
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="lname">Main Image:</label>
<br>
    <div class="custom-file form-control  " style="width: 50%">
        <br>
        {!! Form::file('image', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile", 'required','onchange'=>'showimage(this)']) !!}                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
      <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>
    <div class="col-sm-offset-2 col-sm-10">

        {!! Form::submit('ADD Image To Project', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}

      </div>
{{ Form::close() }}
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}