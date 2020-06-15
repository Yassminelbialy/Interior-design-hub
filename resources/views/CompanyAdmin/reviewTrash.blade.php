@extends('admin.companyBase')
@section('CompanyAdminBase')

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
      @foreach ($reviews as $review)
      <tr>
        <th scope="row">{{$review->id}}</th>
        <td><img src="/images/review/{{$review->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
        <td>
            <a href="{{ route('company.reviewTrash.edit', $review->id) }}"class="btn btn-success">Active</a>
          </td>
          <td>
            {!! Form::open(['route' => ['company.reviewTrash.destroy',$review->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
            {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
            {!! Form::close() !!}
          </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection