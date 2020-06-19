@extends('admin.companyBase')
@section('CompanyAdminBase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">

        <thead>
            <tr>
                <td colspan="4"><a href="{{route('company.trash.index')}}"><i class="fas fa-trash fa-4x" style="color: blue"></i></a></td>
                <td colspan="4"><a href="{{route('company.jops.create')}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>
             </tr>
          <tr>
            <th scope="col" class="text-light h6" style="font-weight:700">#</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Title</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Description</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Requirements</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Jop Type</th>
            <th scope="col" class="text-light h6" style="font-weight:700">Location</th>  
            <th scope="col" class="text-danger h6" style="font-weight:700" colspan="3">Actions</th>
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
                <a href="{{route('company.jops.show',$jop->id)}}"> 
                  <i class="fas fa-binoculars fa-2x" style="color: green"></i>
                </a>

              </td>
              <td> 
                <a href="{{ route('company.jops.edit', $jop->id) }}" > <i class="fas fa-edit fa-2x" style="color: blue"></i></a>      
              </td>
              <td>
                {!!Form::open(['route'=>[ 'company.jops.destroy' , $jop->id],'method'=>'delete','style'=>'    display: inline-block '])!!}
                {{ Form::button('<i style="color:red"class="fa fa-trash fa-2x"></i>', ['type' => 'submit'] )  }}


          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection