
@extends('admin.base')

@section('adminbase')

<table class="table table-dark table-stripped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>

    </tr>

    @foreach( $data as $instance )

    <tr>
    <td scope="col"></td>  
    <td scope="col">{{ $instance->name }}</td>
    <td scope="col">{{ $instance->phone }}</td>
    <td scope="col">{{ $instance->email }}</td>

    

    <td>
    {!! Form::open(['route' => ['manager.user.destroy', $instance->id] , 'method'=>'delete']) !!}
                        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    </td>
    </tr>

    @endforeach
  </thead>
</table>

@endsection


