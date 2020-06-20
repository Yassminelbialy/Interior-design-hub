@extends('admin.companyBase')
@section('CompanyAdminBase')

<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>
      
      <tr>
        <th scope="col" class="text-light h6" style="font-weight:700">#</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Title</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Description</th>
        <th scope="col" class="text-light h6" colspan="2" style="font-weight:700">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr>
        <th scope="row">{{$service->id}}</th>
        <td>{{$service->title}}</td>
        <td>{{$service->description}}</td>
        <td>
            <a href="{{ route('company.serviceTrash.edit', $service->id) }}"class="btn btn-success">Active</a>
          </td>
          <td>
            {!! Form::open(['route' => ['company.serviceTrash.destroy',$service->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
            {!! Form::close() !!}
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection