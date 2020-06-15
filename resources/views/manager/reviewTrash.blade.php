@extends('admin.base')

@section('adminbase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>
      
      <tr>
        <th scope="col" class="text-light h6" style="font-weight:700">#</th>
        <th scope="col" class="text-light h6" style="font-weight:700">image</th>
        <th scope="col" class="text-light h6" colspan="2" style="font-weight:700">Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($reviews as $review)
      <tr>
        <th scope="row">{{$review->id}}</th>
        <td><img src="/images/review/{{$review->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
        <td>
            <a href="{{ route('manager.reviewTrash.edit', $review->id) }}"class="btn btn-success">Active</a>
          </td>
          <td>
            {!! Form::open(['route' => ['manager.reviewTrash.destroy',$review->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
            {!! Form::close() !!}
          </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection