@extends('admin.base')

@section('adminbase')

<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_user_index_name')}} </th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_user_index_phone')}}</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_user_index_email')}}</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.manager_user_index_state')}}</th>
      <th scope="col" class="text-danger h6" style="font-weight:700">{{trans('messages.manager_user_index_delete')}}</th>
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
