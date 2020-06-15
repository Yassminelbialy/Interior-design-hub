 <!-- start projects -->
 <!-- <section class="projects">
     @if(count($projects)>0)
     <h2 class="text-left">HAWN NPOEktbi:</h2>
     <div class="container-fluid">
         <div class="row">
             @foreach ($projects as $project)

             <div style="background-image: url(/projectimages/{{$project->mainImage}});" class="project_content col-md-4 col-sm-6 pb-3">
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
             <h1>No Projects Yet</h1>
         </div>
         @endif
     </div>
 </section> -->
 <!-- end projects -->


 <section class="projects_container text-center">
     <h2> Last Projects</h2>
     <div class="container-fluid">
         <div class="row">
             @forelse($projects as $project)
             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/projectimages/{{$project->mainImage}}" alt="" />
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
             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="./images/pictures_projects/2.jpeg" alt="" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 Lorem, ipsum
                             </h2>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                 atque sunt ab ipsum? Et veniam error unde repellat voluptates
                                 maxime, harum distinctio voluptatum quas voluptatem corporis.
                                 Quisquam molestiae repudiandae hic?
                             </p>
                             <a href="#">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/3.jpeg" alt="" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 Lorem, ipsum
                             </h2>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                 atque sunt ab ipsum? Et veniam error unde repellat voluptates
                                 maxime, harum distinctio voluptatum quas voluptatem corporis.
                                 Quisquam molestiae repudiandae hic?
                             </p>
                             <a href="#">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/4.jpeg" alt="" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 Lorem, ipsum
                             </h2>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                 atque sunt ab ipsum? Et veniam error unde repellat voluptates
                                 maxime, harum distinctio voluptatum quas voluptatem corporis.
                                 Quisquam molestiae repudiandae hic?
                             </p>
                             <a href="#">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/5.jpeg" alt="" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 Lorem, ipsum
                             </h2>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                 atque sunt ab ipsum? Et veniam error unde repellat voluptates
                                 maxime, harum distinctio voluptatum quas voluptatem corporis.
                                 Quisquam molestiae repudiandae hic?
                             </p>
                             <a href="#">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/1.jpeg" alt="" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 Lorem, ipsum
                             </h2>
                             <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                 atque sunt ab ipsum? Et veniam error unde repellat voluptates
                                 maxime, harum distinctio voluptatum quas voluptatem corporis.
                                 Quisquam molestiae repudiandae hic?
                             </p>
                             <a href="#">show details</a>

                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </div>

     <button>All projects</button>

 </section>
