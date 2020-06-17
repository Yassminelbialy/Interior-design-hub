
 <section class="projects_container text-center">
     <h1> Last Projects</h1>
     <div class="container-fluid">
         <div class="row">
             @forelse($projects as $project)
             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/projectimages/{{$project->mainImage}}" alt="mainImage" />
                     </div>
                     <div class="face face2">
                         <div class="content">
                             <h2>
                                 {{$project->title}}
                             </h2>
                             <p>
                                 {{$project->hint}}
                             </p>
                             @isset($project->company->companyName)
                                         <a class="btn btn-info mb-1 text-light" rel="nofollow" href="#">{{$project->company->companyName}}</a>

                             @endisset
                             <a class="btn btn-dark mb-1 text-light" rel="nofollow" href="{{ url('view/'.$project->id)}}">View Project</a>

                         </div>
                     </div>
                 </div>
             </div>
             @empty
             <div class="alert alert-info text-center" style="margin:0 auto;width:50%">
                 <h1>No Projects Yet</h1>
             </div>
             @endforelse

             {{-- <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="./images/pictures_projects/2.jpeg" alt="mainImage" />
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
                             <a href="#" rel="nofollow">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/3.jpeg" alt="mainImage" />
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
                             <a href="#" rel="nofollow">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/4.jpeg" alt="mainImage" />
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
                             <a href="#" rel="nofollow">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/5.jpeg" alt="mainImage" />
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
                             <a href="#" rel="nofollow">show details</a>

                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-6">
                 <div class="project_card">
                     <div class="face face1">
                         <img src="/images/pictures_projects/1.jpeg" alt="mainImage" />
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
                             <a href="#" rel="nofollow">show details</a>

                         </div>
                     </div>
                 </div>
             </div> --}}


         </div>
     </div>

     <a href="/allproject"><button>All projects</button></a>

 </section>
