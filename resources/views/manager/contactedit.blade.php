@extends('admin.base')
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

{{ Form::model($contact,['route' => ['manager.contacts.update',$contact],'method'=>'PUT'])}}
<div class="row">
  <div class="col-md-9">
    <div class="contact-form">
      <div class="form-group">
        <label class="control-label col-sm-3" for="phoneNo">Phone:</label>
        <div class="col-sm-10">
          {!! Form::text('phoneNo', null, ['required'=>'true','class'=>"form-control",'id'=>"phoneNo"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">Email:</label>
        <div class="col-sm-10">
          {!! Form::text('email', null, ['required'=>'true','class'=>"form-control",'id'=>"email"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="whatsAppLink">whatsapp:</label>
        <div class="col-sm-10">
          {!! Form::text('whatsAppLink', null, ['class'=>'form-control', 'id'=>"whatsAppLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="facebookLink">FaceBook:</label>
        <div class="col-sm-10">
          {!! Form::text('facebookLink', null, ['class'=>'form-control', 'id'=>"facebookLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="viberLink">Viber:</label>
        <div class="col-sm-10">
          {!! Form::text('viberLink', null, ['class'=>'form-control', 'id'=>"viberLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="telegramLink">Telegram:</label>
        <div class="col-sm-10">
          {!! Form::text('telegramLink', null, ['class'=>'form-control', 'id'=>"telegramLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pinterestLink">Pinterest:</label>
        <div class="col-sm-10">
          {!! Form::text('pinterestLink', null, ['class'=>'form-control', 'id'=>"pinterestLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="instaLink">Instagram:</label>
        <div class="col-sm-10">
          {!! Form::text('instaLink', null, ['class'=>'form-control', 'id'=>"instaLink"]) !!}
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="wLink">W:</label>
        <div class="col-sm-10">
          {!! Form::text('wLink', null, ['class'=>'form-control', 'id'=>"wLink"]) !!}
        </div>
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