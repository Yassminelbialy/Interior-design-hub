</header>
<nav class="navbar navbar-expand-lg text-center">
  <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>

  <div class="contact_us">
    @foreach ($contact as $cont )
    <i class="fas ml-3 fa-mobile-alt"></i>
    <span class="ml-2">{{$cont->phoneNo}}</span>
    <i class="far ml-3 fa-envelope"></i>
    <span class="ml-2">{{$cont->email}}</span>
  </div>
  <div class="social_media">
    <a href="{{$cont->instaLink}}"><i class="fab fa-instagram ml-2"></i></a>
    <a href="{{$cont->facebookLink}}"><i class="fab fa-facebook-f ml-2"></i></a>
    <a href="{{$cont->pinterestLink}}"><i class="fab fa-pinterest ml-2"></i></a>
    <a href="{{$cont->wLink}}"><i class="fa fa-vk ml-2"></i></a>


    @endforeach
  </div>
</nav>
<!-- start information -->

<div style="background-image: url(images/pictures_projects/3.jpeg);" class="information">
  <div class="overlayer"></div>
  <div class="border_box"></div>
  <div class="information_content text-center">
    <h2>Ctya hamada Maxen Natoah</h2>
    <p>Lorem ipsum dolor sit amet consectetur</p>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni
      consequuntur sapiente, provident ea saepe blanditiis! Amet quas labore
      maxime dignissimos quo! Aliquam tenetur minima ullam nobis sed
      assumenda, neque veniam
    </p>
    <button>связаться с нами</button>
    <div class="starting">
      <div></div>
    </div>
  </div>
  <div class="buttons_call">
    <div class="mb-1">
      <button class="call_me phone"><i class="fas fa-phone-alt fa-x"></i></button>
    </div>
    <div>
      <button class="call_me tri">
        <i class="fas fa-caret-up fa-2x"></i>
      </button>
    </div>

  </div>
</div>
</header>