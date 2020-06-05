
@extends('admin.base')

@section('adminbase')

<a href="fbPosts/create">Add image with link</a>
<table class="table table-dark table-stripped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Link</th>
    </tr>

    @foreach( $dataOfPosts as $instance )

    <tr>
    <td scope="col"></td>  
    <td scope="col"><img src="{{ asset('images/fbimages/'. $instance->image) }}" alt="image" width="150px" height="80px" /></td> 
    <td scope="col">{{ $instance->fbLink }}</td>
    <td>
    {!! Form::open(['route' => ['manager.fbPosts.destroy', $instance->id] , 'method'=>'delete']) !!}
                        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    </td>

    <td>
      <a href="{{ route('manager.fbPosts.edit' , $instance->id) }}" class="btn btn-success">Update !</a>
    </td>
    </tr>

    @endforeach
  </thead>
  <tbody>
    
  </tbody>
</table>

@endsection


