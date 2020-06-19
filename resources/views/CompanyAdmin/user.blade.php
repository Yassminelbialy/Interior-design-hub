@extends('admin.companyBase')
@section('CompanyAdminBase')

<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Name </th>
      <th scope="col" class="text-light h6" style="font-weight:700">Phone</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Email</th>
      <th scope="col" class="text-light h6" style="font-weight:700">State</th>
      <th scope="col" class="text-danger h6" style="font-weight:700">Action</th>
    </tr>
    @foreach( $data as $instance )
    @if($instance->adminRole != 1 && $instance->adminRole != 2)
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
        {!! Form::open(['route' => ['company.user.destroy', $instance->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endif
    @endforeach
  </thead>
</table>

@endsection