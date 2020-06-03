<section class="our_video">
    <div class="row">
        <div class="col-sm-12 col-lg-6 ">
            @foreach ($ceoInfo as $ceo )
            <div class="img">
            <img data-src="{{$ceo->image}}" alt="Alexandra" />
            </div>
            <div class="wrapper">
                <div class="icon-wrapper">
                    <div class="icon">
                        <i class="fa fa-play" data-toggle="modal" data-target="#myModal"></i>
              
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" >&times;</span>
                                        </button>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video  controls class="embed-responsive-item" allowscriptaccess="always" allow="autoplay">
                                                <source src="{{$ceo->video}}" type="video/mp4" >
                                              Your browser does not support the video tag.
                                          </video>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="stats">
                <h2 class="h1">Our Main Statistics</h2>
               
                <p>
                {{$ceo->hint}}
                </p>
                <p class="text" >
                    {{$ceo->statement}}
                </p>
                @endforeach
            </div>

        </div>
    </div>
</section>