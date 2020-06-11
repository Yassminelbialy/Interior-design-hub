<section class="our_video">
    <div class="row">
        <div class="col-sm-12 col-lg-6 ">
            @foreach ($ceoInfo as $ceo )
            <div class="img">
                <img data-src="/images/{{$ceo->image}}" alt="Alexandra" />
            </div>
            <div class="wrapper">
                <div class="icon-wrapper">
                    <div class="icon">
                        <i class="video_ceo_btn fa fa-play" data-toggle="modal" data-target="#my_video_ceo"></i>

                        <!-- Modal -->
                        <div class="modal fade" id="my_video_ceo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close close_video_ceo" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-left:30px">&times;</span>
                                        </button>
                                        <div>
                                            <video class="video_ceo" controls>
                                                <source src="/videos/{{$ceo->video}}" type="video/mp4">
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
                <p class="text">
                    {{$ceo->statement}}
                </p>
                @endforeach
            </div>

        </div>
    </div>
</section>