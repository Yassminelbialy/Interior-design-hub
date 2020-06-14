@extends('admin.base')
@section('adminbase')
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h3">#</th>
      <th scope="col" class="text-light h3">Name </th>
      <th scope="col" class="text-light h3">Phone</th>
      <th scope="col" class="text-light h3">Comment</th>
      <th scope="col" class="text-light h3"> Time to call </th>
    </tr>
    @foreach( $data as $instance )
    <tr>
      <td scope="col"></td>
      <td scope="col">{{ $instance->name }}</td>
      <td scope="col">{{ $instance->phone }}</td>
      <td>
        {!! Form::open(['route' => ['manager.consultations.destroy', $instance->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </thead>
</table>

@endsection