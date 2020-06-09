
<!DOCTYPE html>
    <html>

        <head>
                <title>Profile</title>
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
                <link  href="{{ asset('css/userProfileStyle.css')}}" rel="stylesheet">
        </head>
        <body>
            
            <a href="{{ route('logout') }}" class="btn " style="background-color:0000FF; color:#0000FF !important;margin:10px;padding:10px;font-size:20px;float:right;"                                         onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="container">
        
                <div class="page-header">
                    <h1 class="text-center" style="color:#0000FF;font-weight: bold;">
                    Welcome {{$userName}} To Your Profile<span class="pull-right label label-default"></span></h1>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="panel with-nav-tabs panel-success">
                            <!-- <div class="panel-heading"> -->
                                    <!-- <ul class="nav nav-tabs" styl>
                                        <li class="active"><a href="#tab1default" data-toggle="tab">My Order</a></li>
                                        <li><a href="chat" data-toggle="tab">Messages</a></li>

                                    </ul> -->
                            <!-- </div> -->
                            <div class="panel-body">
                                <div class="tab-content">
                              
                                @if(Auth::check() && Auth::user()->state == 1)
                                    @foreach($orderList as $order)
                                    <div class="container-fluid my-5 d-sm-flex justify-content-center">
                                        <div class="card px-2">
                                            <div class="card-header bg-white">
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <p class="text-muted"> Order ID <span class="font-weight-bold text-dark">{{ $order->id }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="media flex-column flex-sm-row">
                                                    <div class="media-body ">
                                                        <h5 class="bold">Description: {{ $order->description }}</h5>
                                                        <p class="text-muted">Cost: {{ $order->cost }}$</p>
                                                    </div><img class="align-self-center img-fluid" src="/images/AdminOrderImages/{{$order->contractImg}}" width="180 " height="180">
                                                </div>
                                            </div>
                                            <div class="row px-3">
                                                <div class="col">
                                                    <ul id="progressbar">
                                                        <li class="step0 active " id="step1">{{ $order->state }}</li>
                                                        <li class="step0 active text-center" id="step2">{{ $order->state }}</li>
                                                        <li class="step0 text-muted text-right" id="step3">{{ $order->state }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    </div>

                                    <hr>

                                    @endforeach

                                    @elseif(!$quizData->isEmpty())

                                    <h2 class="text-center text-info">Your Quiz</h2>
                                        <div class="row text-center">
                                            @foreach($quizData as $data)
                                                <div class="col-md-6">
                                                    <p class="lead"> Your Area: <span class="text-info">{{ $data ->area}}</span></p>
                                                    <p class="lead"> Your Name: <span class="text-info">{{ $data ->customerName}}</span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="lead"> Contact Via: <span class="text-info">{{ $data ->contactTybe}}</span></p>
                                                    <p class="lead"> Your Design: <span class="text-info">{{ $data ->design}}</span></p>
                                                </div>
                                            @endforeach
                                        </div>

                                    @else
                                       <h4 style="color:0000FF;font-weight: bold;"> You Don't Apply the Quiz , apply <a href= "/"> Now </a></h4>
                                    @endif
                                    <div class="tab-pane fade" id="tab2default">Default 2</div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </body>
</html>
