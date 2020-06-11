@extends('admin.base')
@section('adminbase')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<script type="text/javascript" src="{{ asset('css/scribt.js') }}"></script>
<div class="container">
	{{ Form::open(['route' => 'manager.category.store','enctype' => 'multipart/form-data','method'=>'post'])}}
	<div class="container contact text-light">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-info">
					{{-- <img src="https://img.freepik.com/free-vector/abstract-book-pencil-logo_10724-10.jpg?size=338&ext=jpg" alt="image" class="imgweb"/> --}}
					{{-- <h2>Contact Us</h2>
                <h4>We would love to hear from you !</h4> --}}

					<div style="display:flex;     flex-direction: column;     justify-content: center;

                border: solid gold 2px width:60%" class="images">
						<h6> uploaded-images</h6>
						<hr>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="contact-form">
					<div class="form-group">
						<label class="control-label col-sm-3" for="fname">Category Name:</label>
						<div class="col-sm-10">
							{!! Form::text('name', null, ['required'=>'true','class'=>"form-control",'placeholder'=>"Category Name",'aria-label'=>"Book Nmae",'id'=>"fname"]) !!}

							{{-- <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname"> --}}
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="lname">Category Image:</label>

						<div class="custom-file">
							{!! Form::file('image', ['class'=>'custom-file-input','id'=>"validatedCustomFile", 'required']) !!} <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							<div class="invalid-feedback">Example invalid custom file feedback</div>
						</div>
						{{-- <input type="file" name="image[]" multiple> --}}
						{!! Form::submit('ADD Category', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


{{ Form::close() }}

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
