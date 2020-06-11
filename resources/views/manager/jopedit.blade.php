@extends('admin.base')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
{{ Form::model($jop,['route' => ['manager.jops.update',$jop],'method'=>'PUT'])}}
<div class="row text-light">

	<div class="col-md-9">
		<div class="contact-form">
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname">Jop Title:</label>
				<div class="col-sm-10">
					{!! Form::text('title', null, ['required'=>'true','class'=>"form-control",'placeholder'=>'Project Title','aria-label'=>"Book Nmae",'id'=>"fname"]) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="lname">Jop Type:</label>
				<div class="col-sm-10">
					{!! Form::text('jopType', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"Jop Type",'aria-label'=>"Book Author Nmae",'id'=>"lname"]) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="comment">Description:</label>
				<div class="col-sm-10">
					{!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>"Jop Description",'rows'=>"5", 'id'=>"comment",'required']) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="comment">Requirements:</label>
				<div class="col-sm-10">
					{!! Form::textarea('requirements', null, ['class'=>'form-control','placeholder'=>"Jop Requirements",'rows'=>"5", 'id'=>"comment",'required']) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="lname">Jop Location:</label>
				<div class="col-sm-10">
					{!! Form::text('location', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"street , Region , country",'aria-label'=>"Book Author Nmae",'id'=>"lname"]) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">

					{!! Form::submit('Update Jop', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}

				</div>
			</div>
		</div>
	</div>
	{{ Form::close() }}
</div>
@endsection