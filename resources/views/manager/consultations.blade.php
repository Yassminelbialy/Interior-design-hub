@extends('admin.base')
@section('adminbase')
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_project_index_name')}} </th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_user_index_phone')}}</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_project_index_comment')}}</th>
      <th scope="col" class="text-light h6" style="font-weight:700"> {{trans('messages.manager_project_index_timetocall')}} </th>
      <th scope="col" class="text-danger h6" style="font-weight:700"> {{trans('messages.manager_project_index_action')}} </th>
    </tr>
    @foreach( $data as $instance )
    <tr>
      <td scope="col"></td>
      <td scope="col">{{ $instance->name }}</td>
      <td scope="col">{{ $instance->phone }}</td>
      <td scope="col">{{ $instance->comment }}</td>
      <td scope="col">{{ $instance->timeToCall }}</td>
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
