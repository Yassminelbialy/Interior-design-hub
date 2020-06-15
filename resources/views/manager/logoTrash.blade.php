@extends('admin.base')

@section('adminbase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>
      
      <tr>
        <th scope="col" class="text-light h3">#</th>
        <th scope="col" class="text-light h3">image</th>
        <th scope="col" class="text-light h3" colspan="2">Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($logos as $logo)
      <tr>
        <th scope="row">{{$logo->id}}</th>
        <td><img src="/images/logo/{{$logo->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
        <td>
            <a href="{{ route('manager.logoTrash.edit', $logo->id) }}"class="btn btn-success">Active</a>
          </td>
          <td>
            {!! Form::open(['route' => ['manager.logoTrash.destroy',$logo->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
            {!! Form::close() !!}
          </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection