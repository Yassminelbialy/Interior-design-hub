@extends('admin.companyBase')
@section('CompanyAdminBase')

<a href="fbPosts/create" class="btn btn-info m-2">Add image with link</a>
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Image</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Link</th>
    </tr>
    @foreach( $dataOfPosts as $instance )
    <tr>
      <td scope="col"></td>
      <td scope="col"><img src="{{ asset('images/fbimages/'. $instance->image) }}" alt="image" width="150px" height="80px" /></td>
      <td scope="col">{{ $instance->fbLink }}</td>
      <td>
        {!! Form::open(['route' => ['company.fbPosts.destroy', $instance->id] , 'method'=>'delete']) !!}
        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </td>
      <td>
        <a href="{{ route('company.fbPosts.edit' , $instance->id) }}" class="btn btn-success">Update !</a>
      </td>
    </tr>
    @endforeach
  </thead>
  <tbody>

  </tbody>
</table>
@endsection