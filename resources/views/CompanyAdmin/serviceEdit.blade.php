@extends('admin.companyBase')
@section('CompanyAdminBase')


<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
{{ Form::model($service,['route' => ['company.service.update',$service],'enctype' => 'multipart/form-data','method'=>'PUT'])}}
<div class="row text-light">
	<div class="col-md-9">
		<div class="contact-form">
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname">Service Title:</label>
				<div class="col-sm-10">
					{!! Form::text('title', null, ['required'=>'true','class'=>"form-control",'id'=>"title"]) !!}
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="comment">Description:</label>
				<div class="col-sm-10">
					{!! Form::textarea('description', null, ['class'=>'form-control','rows'=>"5", 'id'=>"description",'required']) !!}
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					{!! Form::submit('Update Service', ['class'=>'btn btn-default btn btn-outline-secondary']) !!}
				</div>
			</div>
		</div>
	</div>
	{{ Form::close() }}
</div>
@endsection