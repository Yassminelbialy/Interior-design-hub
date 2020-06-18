@extends('layouts.app')
<div class="page" id="home">

    <div class="cube-container">

        <div class="cube nav-cube">

            <ul>
                <li> <a data-scroll="home" class="nav-link active" rel="nofollow">Home</a></li>
                <li> <a data-scroll="about_us" class="nav-link" rel="nofollow">About Us</a></li>
                <li> <a data-scroll="steps_working" class="nav-link" rel="nofollow">How to Work</a></li>
                <li> <a data-scroll="services" class="nav-link" rel="nofollow">Services</a></li>
                <li> <a data-scroll="statitics" class="nav-link" rel="nofollow">Statitics</a></li>
                <li> <a data-scroll="all_projects" class="nav-link" rel="nofollow">Projects</a></li>
                <li> <a data-scroll="quizes" class="nav-link" rel="nofollow">Start Quiz</a></li>
                <li> <a data-scroll="our_team" class="nav-link" rel="nofollow">the Team</a></li>
                <li> <a data-scroll="" class="nav-link" rel="nofollow">clients</a></li>
                <li> <a data-scroll="" class="nav-link" rel="nofollow">Services</a></li>
            </ul>

        </div>
    </div>


    <div class="main-content">
        <div class="menu text-center d-flex justify-content-around">
            <a class="navbar-brand" href="#" rel="nofollow"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>

            <a href="#" class="nav-toggle closed" rel="nofollow" data-cube="close-switch">
                <span>+</span>
            </a>


        </div>
    </div>


</div>
@section('content')
<section class="projects">
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
        <p class="text-light lead"> <strong class="text-info">Description: </strong>{{$project->description}}</p>

        @isset($project->company->companyName)
              <a class=" mb-1 text-info" style="text-decoration:underline" rel="nofollow" href="/{{$project->company->id}}">{{$project->company->companyName}}</a>
        @endisset

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
                  <img class="card-img-top" data-src="/projectimages/{{$relProject->image}}" alt="project" style="height:350px">
                  <div class="projectDetails mt-5">
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
