</header>
<div class="page" id="home">

    <div class="cube-container">

        <div class="cube nav-cube">

            <ul>
                <li> <a href="{{url('/')}}" class="nav-link active" rel="nofollow">Home</a></li>
                <li> <a data-scroll="about_us" class="nav-link">About Us</a></li>
                <li> <a data-scroll="steps_working" class="nav-link">How to Work</a></li>
                <li> <a data-scroll="services" class="nav-link">Services</a></li>
                <li> <a data-scroll="statitics" class="nav-link">Statitics</a></li>
                <li> <a data-scroll="all_projects" class="nav-link">Projects</a></li>
                <li> <a data-scroll="quizes" class="nav-link">Start Quiz</a></li>
                <li> <a data-scroll="our_team" class="nav-link">the Team</a></li>
                <li> <a data-scroll="" class="nav-link">clients</a></li>
                <li> <a data-scroll="" class="nav-link">Services</a></li>
                <li><a class="nav-link" href="{{ route('jops') }}" >Jops</a></li>
            </ul>

        </div>
    </div>


    <div class="main-content">
        <div class="menu text-center d-flex justify-content-around align-items-center">
            <a class="navbar-brand" href="#"><img data-src="/images/company_logo.PNG" alt="logo image"> </a>
      @foreach ($contact as $cont )
            <div class="contact_us">

                <i class="fas ml-3 fa-mobile-alt"></i>
                <span class="ml-2">{{$cont->phoneNo}}</span>
                <i class="far ml-3 fa-envelope"></i>
                <span class="ml-2">{{$cont->email}}</span>
            </div>
            <div class="social_media">
                <a href="{{$cont->instaLink}}"><i class="fab fa-instagram ml-2"></i></a>
                <a href="{{$cont->facebookLink}}"><i class="fab fa-facebook-f ml-2"></i></a>
                <a href="{{$cont->pinterestLink}}"><i class="fab fa-pinterest ml-2"></i></a>
                <a href="{{$cont->wLink}}" ><i class="fa fa-vk ml-2"></i></a>
            </div>
            @endforeach
            @guest
                <a class="btn btn-success login" href="{{ route('login') }}">login</a>
            @else
                <a class="btn btn-success login" href="{{ url('/profile') }}">View Profile</a>
                <a href="{{ route('logout') }}"  class="btn btn-success login" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>      
            @endguest
            <a href="#" class="nav-toggle closed" data-cube="close-switch">
                <i class="fas fa-bars"></i>
            </a>


        </div>
    </div>


</div>
<div class="slider-container">


    <ul class="slider-pagi"></ul>

    <div class="slider">


    @forelse($slide_img as $slide_imgg)
        <div  class="slide slide-0 active">




            <div style="background:url({{ asset('images/projectsSlider/'. $slide_imgg->img)}}); no-repeat  " class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                    <h1 class="slide__text-heading">{{ $slide_imgg->title }}</h1>
                    <p class="slide__text-desc">{{ $slide_imgg->description  }}</p>
                    <a class="slide__text-link" href="{{ url('view/'.$slide_imgg->project_id)}}">Project link</a>
                </div>
            </div>
        </div>
    @empty

    <div  class="slide slide-0 active">
        <div style="background:url({{ asset('images/projectsSlider/0000.jpg')}}); no-repeat  " class="slide__bg"></div>
        <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
        </div>
    </div>
    <div  class="slide slide-0 active">
        <div style="background:url({{ asset('images/projectsSlider/1.jpg')}}); no-repeat  " class="slide__bg"></div>
        <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
        </div>
    </div>
    <div  class="slide slide-0 active">
        <div style="background:url({{ asset('images/projectsSlider/12.jpg')}}); no-repeat  " class="slide__bg"></div>
        <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
        </div>
    </div>
    @endforelse
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
