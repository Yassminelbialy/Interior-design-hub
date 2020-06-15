@extends('admin.base')

@section('adminbase')

<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">

        <thead>
          <tr>
            <th scope="col" class="text-light h6" style="font-weight:700">#</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Title</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Description</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Requirements</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Jop Type</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Location</th>  
            <th scope="col" class="text-light h6" colspan="3" style="font-weight:700">Actions</th>
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
                <a href="{{ route('manager.jobTrash.edit', $jop->id) }}"class="btn btn-success">Active</a>
              </td>
              <td>
                {!! Form::open(['route' => ['manager.jobTrash.destroy',$jop->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection