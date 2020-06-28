@extends('admin.companyBase')
@section('CompanyAdminBase')
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Name </th>
      <th scope="col" class="text-light h6" style="font-weight:700">Phone</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Comment</th>
      <th scope="col" class="text-light h6" style="font-weight:700"> Time to call </th>
    </tr>
    @foreach( $data as $instance )
    <tr>
      <td scope="col"></td>
      <td scope="col">{{ $instance->name }}</td>
      <td scope="col">{{ $instance->phone }}</td>

      <td scope="col">{{ $instance->comment }}</td>
      <td scope="col">{{ $instance->timeToCall }}</td>
      <td>
        {!! Form::open(['route' => ['company.consultations.destroy', $instance->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </thead>
</table>

@endsection
