@extends('layouts.app')

@section('content')
@component('components.header',['contact' => $contact,'slide_img'=>$slider_projcts])
@endcomponent
 <!-- start projects -->
 <div class="row mt-1">
    <div class="col-md-3" style="background-color: black">



    <div class="form-inline m-5">
       <i class="fas fa-search" aria-hidden="true"></i>
        <input id='search' required name="data" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
        aria-label="Search">
    </div>


      <h1 style="margin-top:60px" class="text-center text-light">All Categories</h1>
      <div class="list-group mb-2" style="height: 400px;overflow-x: hidden;">
        @foreach($categories as $id=>$category)
      <p name="{{$id}}" class="categoryclass list-group-item list-group-item-action text-light mb-1 mt-2" style="background-color:#c19e70 !important;width:60%;margin:0 auto">{{$category}}</p>
        @endforeach

      </div>


      <h1 style="margin-top:60px" class="text-center text-light">All Companies</h1>
      <div class="list-group mb-2" style="height: 400px;overflow-x: hidden;">
        @foreach($companies as $id=>$company )
      <p name="{{$id}}" class=" companyclass list-group-item list-group-item-action text-light mb-1 mt-2" style="background-color:#c19e70 !important;width:60%;margin:0 auto">{{$company}}</p>
        @endforeach
      </div>
    </div>
    <div class="col-md-9" style="background-color:#c19e70">

        <div id ='before' class="row" style="display: list-item;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                    {{-- <li class="breadcrumb-item"><a href="#">All Projects</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">All Projects</li>

                    <button style="margin: auto;" class="btn btn-secondary">
                        Reset Search
                    </button>
                </ol>

            </nav>

        </div>

      <section class="projects_container text-center">
        <h2> All Projects</h2>
        <div class="container-fluid">
            <div class="row" id='alldata'>
                @forelse  ($projects as $project)
                <div class="col-md-6" >
                    <div class="project_card">
                        <div class="face face1">
                            <img src="/projectimages/{{$project->mainImage}}" class="w-100 h-100" alt="" />
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <h2>
                                {{$project->title}}
                                </h2>
                                <p>
                                {{$project->hint}}
                                </p>
                                <a class="btn btn-dark mb-1 text-light" href="{{ url('view/'.$project->id)}}">View Project</a>

                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="alert alert-info text-center" style="margin:0 auto;width:50%">
                    <h1>No Projects Yet</h1>
                </div>
                @endforelse
            </div>
        </div>
      </section>
      <!-- end projects -->
    </div>
 </div>
<script src="/js/allprojectpagesearch.js">

</script>
 @endsection
