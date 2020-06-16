@extends('admin.base')
@section('adminbase')

<a href="/manager/sliderImage/create" class="btn btn-info mt-2 ml-2">Add New Image For Slider</a>
<table class="table table-dark ml-2 mt-2 text-center" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
     
      <th scope="col" class="text-light h3">Project Name</th>
      <th scope="col" class="text-light h3">Project Image</th>
     
      
    </tr>
    
  </thead>
  
    <tbody>
    @foreach($slider as $slider_img)
        <tr>
            <td>{{ $slider_img ->title}}</td>
            <td scope="col"><img src="{{ asset('images/projectsSlider/'. $slider_img->img) }}" alt="image" width="150px" height="80px" /></td>
            <td>
                {!! Form::open(['route' => ['manager.sliderImage.destroy', $slider_img->id] , 'method'=>'delete']) !!}
                {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection