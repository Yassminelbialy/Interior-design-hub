
<!DOCTYPE html>
    <html>

        <head>
                <title>Profile</title>
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <link  href="{{ asset('css/userProfileStyle.css')}}" rel="stylesheet">
        </head>

        <body>

            <div class="container">
                <div class="page-header">
                    <h1>Welcome To Your Profile<span class="pull-right label label-default"></span></h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel with-nav-tabs panel-success">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1default" data-toggle="tab">My Order</a></li>
                                        <li><a href="#tab2default" data-toggle="tab">Messages</a></li>
                                        
                                    </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                              
                                @if(count($orderList) > 0)
                                    @foreach($orderList as $order)
                                            
                                    <div class="tab-pane fade in active" id="tab1default">

                                        <p class="lead">Your Order_id : {{ $order->id }}</p>
                                        <p class="lead">Description : {{ $order->description }}</p>
                                        <p class="lead">State : {{ $order->state }}</p>
                                        <p class="lead">Cost  : {{ $order->cost }}</p>
                                        <p class="lead">Your Design :</p>
                                        <img src="/images/logo/{{$order->contractImg}}" width="200px" height="200px"/>

                                       
                                    </div>
                                          
                                    <hr>
                                   
                                    @endforeach

                                    @elseif(!$quizData->isEmpty())

                                    <h2>Your Quiz :</h2>
                                            @foreach($quizData as $data)
                                                <p class="lead"> Your Area :{{ $data ->area}}</p>
                                                <p class="lead"> Your Style : {{ $data ->styles}}</p>
                                                <p class="lead"> Contact Via : {{ $data ->contactType}}</p>             
                                                <p class="lead"> Your Design :{{ $data ->design}}</p>             


                                            @endforeach

                                    @else
                                        You Don't Apply the Quiz
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