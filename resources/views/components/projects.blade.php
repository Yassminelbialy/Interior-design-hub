 <section class="projects_container text-center">
     <h2> Last Projects</h2>
     <div class="container-fluid">
         <div class="row">
             @forelse ($projects as $project)
             <div class="col-md-6">
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



         </div>
     </div>

 </section>