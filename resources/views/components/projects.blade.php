 <!-- start projects -->
 <section class="projects">
  
      @if(count($projects)>0)
      <h2 class="text-left">HAWN NPOEktbi:</h2>
      <div class="container-fluid">
        <div class="row">
          @foreach ($projects as $project)

          <div
            style="background-image: url(/projectimages/{{$project->mainImage}});"
            class="project_content col-md-4 col-sm-6 pb-3"
          >
            <div class="overlayer"></div>
            <div class="border_box"></div>
             <div class="custom_border"></div>
            <div>
              <p>
                {{$project->title}}
              </p>

              <p class=""> {{$project->hint}}</p>
              <a class="btn btn-dark mb-1 text-light" href="{{ url('view/'.$project->id)}}">View Project</a>
            </div>
          </div>
          @endforeach

        </div>
        @else
            <div class="alert alert-info text-center" style="margin:0 auto;width:50%">
              <h1 >No Projects Yet</h1>
            </div>
        @endif
      </div>
    </section>
    <!-- end projects -->
