@extends('admin.base')

@section('adminbase')

<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th class="text-light h6" style="font-weight:700">companyName </th>
      <th class="text-light h6" style="font-weight:700">Director</th>
      <th class="text-light h6" style="font-weight:700">Location</th>
      <th class="text-light h6" style="font-weight:700">Phone </th>
      <th class="text-light h6" style="font-weight:700">Confirm</th>
      <th class="text-danger h6" style="font-weight:700"> Action </th> <th class="text-danger h6" style="font-weight:700"> user </th>
    </tr>
    @foreach( $companies as $company)
    <tr>
      <td>{{ $company->companyName }}</td>
      <td>{{$company->user->name}}</td>
      <td >{{$company->location }}</td>
      <td >{{$company->phoneNum }}</td>
      <td >{{$company->name }}</td>
      <td> 
        @if($company->user->adminRole === 2)
            <a class="btn text-info" rel="nofollow"><i class="fas fa-check-square fa-2x"></i></a>

        @else
            <a href="{{ route('manager.company' , $company->user_id) }}" rel="nofollow" class="btn text-danger"><i class="far fa-check-square fa-2x"></i></a>
        @endif
      </td>
      <td>
        {!! Form::open(['route' => ['manager.company.destroy', $company->id] , 'method'=>'delete']) !!}
            {!! Form::button('<i style="color:#fff" class="fa fa-trash fa-2x"></i>' , ['class'=>'btn btn-danger','type' => 'submit'] ) !!}
        {!! Form::close() !!}
      </td>
    </tr>

    @endforeach
  </thead>
</table>
<div class="row text-center">
    <div class="col-12 text-center d-flex justify-content-center">
        {{$companies->links()}}
    </div>
</div>
@endsection