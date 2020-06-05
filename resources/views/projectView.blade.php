@extends('layouts.navbar')

@section('content')
    <section class="projects" >
      <div class="container-fluid">
        <div class="row">
          <div style="background-image: url(/projectimages/{{$project->mainImage}});" class="project_content col-sm-12 pb-3">
            <div class="overlayer"></div>
            <div class="border_box"></div>
             <div class="custom_border"></div>
          </div>
          <div class="col-sm-12 mt-4 text-light pl-5">
              <h1>
                <span class="text-info">ProjectTitle: </span>{{$project->title}}
              </h1>
              <h2>
                <span class="text-info">ProjectHint: </span>{{$project->hint}}
              </h2>
              <p class="text-light lead" > <strong class="text-info">Description: </strong>{{$project->description}}</p>
            </div>
        </div>
      </div>
    </section>

    <section class="projects pt-5">
      <div class="container-fluid">
        <div class="row">
          @foreach ($relProjects as $relProject)
            <div class="col-md-4 mt-2">
                <div class="card projectView" style="background-color:rgba(0, 0, 0, 0.7)  !important">
                    <div class="card-header" style="width:100%;padding:10px">      
                        <img data-src="/projectimages/{{$relProject->image}}" alt="project" class="card-img-top" style="height:300px">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-light"><strong class="text-info">ProjectKewWords: </strong>{{$relProject->keyWords}}</h3>

                    </div>
                    <div class="card-footer">
                        <p class="card-text text-light"><strong class="text-info">Description: </strong>{{substr($relProject->description,0,30)."... "}}</p>
                        <button class="btn btn-info" data-toggle="modal" data-target="#modalLoginForm{{$relProject->id}}">View More</button>
                        <div class="modal fade" id="modalLoginForm{{$relProject->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <img class="card-img-top" data-src="/projectimages/{{$relProject->image}}" alt="project"  style="height:350px">
                                    <div class="projectDetails mt-5">
                                        <h3 class="card-title text-light"><strong class="text-info">ProjectKewWords: </strong>{{$relProject->keyWords}}</h3>
                                        <p class="card-text text-light"><strong class="text-info">Description: </strong>{{$relProject->description}}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                     
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>
@endsection