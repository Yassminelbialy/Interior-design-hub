@extends('admin.base')

@section('adminbase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>
      <tr>
        <td colspan="2"><a href="{{route('manager.logoTrash.index')}}"><i class="fas fa-trash fa-4x" style="color: blue"></i></a></td>
        <td colspan="2"><a href="{{route('manager.logo.create')}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>
      </tr>
      <tr>
        <th scope="col" class="text-light h3">#</th>
        <th scope="col" class="text-light h3">{{trans('messages.manager_project_index_image')}}</th>
        <th scope="col" class="text-light h3" colspan="2">{{trans('messages.manager_project_index_action')}}</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($logo as $logo)
      <tr>
        <th scope="row">{{$logo->id}}</th>
        <td><img src="/images/logo/{{$logo->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
        <td>
          <a href="{{ route('manager.logo.edit', $logo->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>
        </td>
        <td>
          {!!Form::open(['route'=>[ 'manager.logo.destroy' , $logo->id],'method'=>'delete','style'=>' display: inline-block '])!!}
          {{ Form::button('<i style="color:red"class="fa fa-trash fa-2x"></i>', ['type' => 'submit'] )  }}

          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
