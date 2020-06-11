@extends('admin.base')

@section('adminbase')

<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h3">#</th>
      <th scope="col" class="text-light h3">Name </th>
      <th scope="col" class="text-light h3">Phone</th>
      <th scope="col" class="text-light h3">Email</th>
      <th scope="col" class="text-light h3">State</th>
    </tr>
    @foreach( $data as $instance )
    @if($instance->adminRole != 1)
    <tr>
      <td scope="col"></td>
      <td scope="col">{{ $instance->name }}</td>
      <td scope="col">{{ $instance->phone }}</td>
      <td scope="col">{{ $instance->email }}</td>
      @if($instance->state == 0)
      <td class="text-danger">don't have order</td>
      @else
      <td class="text-info"> have an order</td>
      @endif
      <td>
        {!! Form::open(['route' => ['manager.user.destroy', $instance->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endif
    @endforeach
  </thead>
</table>

@endsection