 <!-- start projects -->
 <section class="projects">
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
                {{$project->description}}
              </p>

              <p class=""> consequuntur sapiente</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- end projects -->
