<!-- Start Social -->
<section class="social">
    <div class="row">
        <div class="col-lg-6">
            <div class="img">
                @foreach ($contact as $cont )
                @foreach ($ceoInfo as $ceo )
                <img data-src="/images/{{$ceo->image}}" alt="Alexandra" />
                @endforeach
            </div>

        </div>
        <div class="col-sm-12 col-lg-6 ">
            <div class="stats">
                <h2 class="h1">Our Main Statistics</h2>
                <hr />

                <i class="fa fa-mobile"><span>{{$cont->phoneNo}}</span></i>
                <i class="fa fa-envelope"><span>{{$cont->email}}</span></i>
                <i class="fa fa-clock-o"><span>9 Am</span></i>
                <hr />
                <div class="phone ml-3 mb-1">
                    <h4>Contact US: </h4>
                    <a class="btn btn-light" href="{{$cont->viberLink}}">viber<img class="viber_image ml-1" data-src="images/viber.png" alt="viber" /></a>
                    <a class="btn btn-light ml-3" href="{{$cont->whatsAppLink}}">whatsapp<i class="fa fa-whatsapp text-success"></i></a>
                    <a class="btn btn-light ml-3" href="{{$cont->telegramLink}}">telegram<i class="fa fa-telegram text-primary"></i></a>
                </div>
                <hr />
                <h4 class="ml-3">Our Social Media</h4>
                <a class="social-icon" href="{{$cont->youtubeLink}}" title="youtube"><i class="fa fa-youtube"></i></a>
                <a class="social-icon" href="{{$cont->instaLink}}" title="instagram"><i class="fa fa-instagram"></i></a>
                <a class="social-icon" href="{{$cont->facebookLink}}" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a class="social-icon" href="{{$cont->pinterestLink}}" title="pinterest"><i class="fa fa-pinterest-square"></i></a>
                <a class="social-icon" href="{{$cont->wLink}}" title="wk"><i class="fa fa-vk"></i></a>
                <hr />
            </div>

            @endforeach
        </div>
    </div>
</section>
<!-- End Social -->