@extends('admin.base')
@section('adminbase')


<a href="/manager/topics/create " class="btn btn-info m-2">Add New Topic</a>
<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">title</th>
      <th scope="col" class="text-light h6" style="font-weight:700">hint</th>
      <th scope="col" class="text-light h6" style="font-weight:700">image</th>
      <th scope="col" class="text-light h6" style="font-weight:700">description</th>
      <th scope="col" class="text-light h6" style="font-weight:700">KeyWord</th>
      
    </tr>
    
  </thead>
  <tbody>
    
    @foreach($topicsDetails as $topicsData)
            <tr>
                    <td>{{ $topicsData->id }}</td>
                    <td>{{ $topicsData->title }}</td>
                    <td>{{ $topicsData->hint }}</td>
                    <td>
                        <img src="{{ asset('images/topicImages/'. $topicsData->image) }}" width="100px" height="100" style="border-radius:50%" alt="topicsImage"/>
                    </td>
                    <td>{{ $topicsData->description }}</td>
                    <td>{{ $topicsData->keyWords }}</td>
                    

                    <td>
                        {!! Form::open(['route' => ['manager.topics.destroy', $topicsData->id] , 'method'=>'delete']) !!}
                            {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                     </td>

                     <td>
                            <a href="{{ route('manager.topics.edit' , $topicsData->id) }}" class="btn btn-success">Update!</a>
                     </td>
                    
            </tr>
    @endforeach
  </tbody>
</table>



@endsection