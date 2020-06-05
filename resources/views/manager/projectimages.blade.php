
@extends('admin.base')

@section('adminbase')

<div class="text-center">
    <table class="table table-hover table-info">
        <thead>
            <tr>
            <td colspan="6"><a href="{{route('manager.project.images.create',$id)}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>
            </tr>
          <tr class="table-dark">
            <th scope="col">#</th>

            <th scope="col">image   </th>
            <th scope="col">description</th>
            <th scope="col">keywords</th>
            <th scope="col">actions</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><img src="/projectimages/{{$item->image}}"style="    display: inline-block; height: 100px ; width:100px ; background-color:red;"></img></td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->keyWords}}</td>
                <td>
                              &ensp;
                              {{-- <a href="{{route('manager.project.images.index',$item->id)}}"> <i class="fas fa-binoculars fa-2x" style="color: green"></i></a> --}}

                            &ensp;

                            <a href="{{ route('manager.project.images.edit',[$id,$item->id]) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>

                            &ensp;
                            {!!Form::open(['route'=>[ 'manager.project.images.destroy' ,$id,$item->id],'method'=>'delete','style'=>'    display: inline-block '])!!}
                            {{ Form::button('<i style="color:red"class="fa fa-trash fa-2x"></i>', ['type' => 'submit'] )  }}

                            {!! Form::close() !!}
                 </td>

            </tr>
            @empty

            @endforelse



        </tbody>
      </table>
</div>
@endsection