



@extends('admin.base')

@section('adminbase')

<div class="text-center">
    <table class="table table-hover table-info">
        <thead>
            <tr>
            <td colspan="6"><a href="{{route('manager.category.create')}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>
            </tr>
          <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">title</th>

            <th scope="col">actions</th>


          </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
            <td><img src="/categoryimages/{{$item->image}}"style="    display: inline-block; height: 100px ; width:100px ; background-color:red;"></img></td>
            <td>{{$item->name}}</td>


                <td> &ensp;

                      &ensp;
                      <a href="{{ route('manager.category.edit', $item->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>

                       &ensp;

                 </td>

            </tr>
            @empty

            @endforelse



        </tbody>
      </table>
</div>
@endsection

