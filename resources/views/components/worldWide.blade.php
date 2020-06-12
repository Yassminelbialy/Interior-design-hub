<section class="world_video">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>WORLDWIDE</h1>
                <p class="text">
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.
                    <button class="btn btn_info">Go somewhere</button>
                </p>
            </div>
            <div class="col-md-7">
                <div class="stats_video">
                    <div class="overlay"></div>
                    <img data-src="../images/7.jpg" alt="" />
                    <div class="wrapper">
                        <div class="icon-wrapper">
                            <div class="icon">
                                <i class="fa video2_btn fa-play" data-toggle="modal" data-target="#video2"></i>
                                <!-- Modal -->
                                <div class="modal fade" id="video2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <video controls id="vidEle" class="embed-responsive-item" allowscriptaccess="always" allow="autoplay">

                                                        <source src="videos/2.mp4" type="video/mp4">
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
            </div>
        </div>
    </div>
    <script>
        document.getElementById("vidEle").disabled = false;
    </script>
</section>