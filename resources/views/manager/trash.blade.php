@extends('admin.base')

@section('adminbase')

<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">

        <thead>
          <tr>
            <th scope="col" class="text-light h3">#</th>
            <th scope="col" class="text-light h3">Title</th>
            <th scope="col" class="text-light h3">Description</th>
            <th scope="col" class="text-light h3">Requirements</th>
            <th scope="col" class="text-light h3">Jop Type</th>
            <th scope="col" class="text-light h3">Location</th>  
            <th scope="col" class="text-light h3" colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jops as $jop)
            <tr>
            <th scope="row">{{$jop->id}}</th>
              <td>{{$jop->title}}</td>
              <td>{{$jop->description}}</td>
              <td>{{$jop->requirements}}</td>
              <td>{{$jop->jopType}}</td>
              <td>{{$jop->location}}</td>
              
              <td>
                <a href="{{ route('manager.trash.edit', $jop->id) }}"class="btn btn-success">Active</a>
              </td>
              <td>
                {!! Form::open(['route' => ['manager.trash.destroy',$jop->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection









































