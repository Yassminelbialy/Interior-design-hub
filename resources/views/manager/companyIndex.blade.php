@extends('admin.base')

@section('adminbase')
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th  class="text-light h5">companyName </th>
      <th class="text-light h5">Director</th>
      <th class="text-light h5">Location</th>
      <th  class="text-light h5">Confirm</th>
      <th class="text-light h5"> Action </th>
    </tr>
    @foreach( $company as $company)
    <tr>
      <td>{{ $company->companyName }}</td>
      <td>{{$company->user->name}}</td>
      <td >{{$company->location }}</td>
      <td> 
        @if($company->user->adminRole === 2)
            <a href="{{ route('manager.company' , $company->user_id) }}" class="btn text-info"><i class="fas fa-check-square fa-2x"></i></a>

        @else
            <a href="{{ route('manager.company' , $company->user_id) }}" class="btn text-danger"><i class="far fa-check-square fa-2x"></i></a>
        @endif
      </td>
      <td>
        {!! Form::open(['route' => ['manager.company.destroy', $company->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </thead>
</table>
@endsection