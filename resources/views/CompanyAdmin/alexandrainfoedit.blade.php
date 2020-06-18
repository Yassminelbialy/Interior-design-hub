@extends('admin.base')
@section('adminbase')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
@push('locationpicker')
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDItHS2YEL3vKXVoB2OcPEzGy5flMJ7N0A"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<script>

$(function() {


//

 // Get element references
 var confirmBtn = document.getElementById('confirmPosition');
  var lat = document.getElementById('lat');

  var lng = document.getElementById('lng');
  var onIdlePositionView = document.getElementById('onIdlePositionView');

  // Initialize locationPicker plugin
  var lp = new locationPicker('map', {
    setCurrentPosition: true, // You can omit this, defaults to true
  }, {
    zoom: 15 // You can set any google map options here, zoom defaults to 15
  });

  // Listen to button onclick event
  confirmBtn.onclick = function () {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    lat.value = location.lat ;
    lng.value = location.lng ;

};

  // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
  google.maps.event.addListener(lp.map, 'idle', function (event) {
    // Get current location and show it in HTML
    var location = lp.getMarkerPosition();
    onIdlePositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
  });

//

});

</script>
<style>
        #map {
      width: 100%;
      height: 480px;
    }
</style>
@endpush

{{ Form::model($ceoInfo,['route' => ['company.alexandra.update',$ceoInfo],'enctype' => 'multipart/form-data','method'=>'PUT'])}}
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
          {!! Form::file('cimage', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile1"]) !!}
          <label class="custom-file-label" for="validatedCustomFile1">Choose file...</label>

        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="video">Video:</label>
        <br>
        <div class="custom-file form-control " style="width: 50%">
          <br>
          {!! Form::file('cvideo', ['class'=>'custom-file-input form-control','id'=>"validatedCustomFile"]) !!}
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10 "style="    text-align: center;
        ">
                  <div id="map"></div>

          <a class="btn btn-default btn btn-outline-secondary" id="confirmPosition">Confirm Position</a>
          <br>

          <p style='display:inline-block'>current: <span id="onIdlePositionView"></span></p>
          &ensp;&ensp;&ensp;
          <p style='display:inline-block'>On click position:
            {!! Form::text('lat',null,['id'=>'lat','placeholder'=>'lat value','required'=>'true']) !!}
            {!! Form::text('lng',null, ['id'=>'lng','placeholder'=>'lng value','tybe'=>'number','required'=>'true']) !!}

            <span id="onClickPositionView"></span></p>
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
