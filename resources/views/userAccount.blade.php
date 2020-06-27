@extends('layouts.user')

@section('content')

<a href="{{url('/')}}" class="btn" style="color:#247fa3 !important;margin:10px;padding:10px;font-size:20px;border-radius:10px"  rel="nofollow"><<-Back To Home</a>

<a href="{{ route('logout') }}" class="btn btn-danger" rel="nofollow" style="color:white !important;margin:10px;padding:10px;font-size:20px;float:right;border-radius:10px" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<button class="btn btn-info mt-4" style="margin:10px;padding:10px;outline:none;font-size:20px;float:right;border-radius:10px" data-toggle="modal" data-target="#modalLoginForm">Sell with us</button>
<div style="clear:both"></div>
@if(count($errors) > 0)

    <div class="alert alert-danger text-center" style="width:50%;margin:10px auto;font-size:25px">
        Something Error please check it !!
    </div>

@endif
@if($msg = Session::get('success'))
    <div class="alert alert-success text-center" style="width:50%;margin:10px auto;font-size:25px">{{$msg}}</div>
@endif
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h1 class="modal-title w-100 font-weight-bold">Confirm</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('company.form')}}" method="post">

                    @csrf

                <div class="modal-body mx-3">
                    <div class="form-group mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Company Name</label>
                        <input type="text"  class="form-control @error('companyName') is-invalid @enderror" name="companyName">
                        @error('companyName')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-groupmb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Location</label>
                        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror">
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-groupmb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone Number</label>
                        <input type="text" name="phoneNum" class="form-control @error('phoneNum') is-invalid @enderror">
                        @error('phoneNum')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="checkbox" value="1" name="acceptConditions" id="agree-term" class="agree-term @error('acceptConditions') is-invalid @enderror" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        @error('acceptConditions')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <a class="btn btn-info terms mb-2" style="color: white !important">Show Terms of service</a>
                    <ul class="list-group show_more mt-2" style="display: none">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
<div class="container">
    <div class="page-header">
        <h1 class="text-center text-info" style="font-weight: bold;font-family: Times New Roman">
            Welcome {{$userName}} To Your Profile<span class="pull-right label label-default"></span></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-success">
                <div class="panel-body">
                    <div class="tab-content">
                        @if(Auth::check() && Auth::user()->state == 1)
                        @foreach($orderList as $order)
                        <div class="container-fluid my-5 d-sm-flex justify-content-center">
                            <div class="card px-2">
                                <div class="card-header bg-white">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <p class="text-muted" style="margin:10px"> Order ID <span class="font-weight-bold text-dark">{{ $order->id }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="media flex-column flex-sm-row">
                                        <div class="media-body " style="margin:10px">
                                            <h5 class="bold">Description: {{ $order->description }}</h5>
                                            <p class="text-muted">Cost: {{ $order->cost }}$</p>
                                        </div><img class="align-self-center img-fluid" src="/images/AdminOrderImages/{{$order->contractImg}}" alt="contractImage" width="180 " height="180">
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col">
                                        <ul id="progressbar">
                                            @if($order->state == "underwork")
                                                <li class="step0 active " id="step1">UnderWork</li>
                                            @else
                                                <li class="step0  " id="step1">UnderWork</li>
                                            @endif
                                            @if($order->state == "prepare")
                                                <li class="step0 active text-center" id="step2">PrePare</li>
                                            @else
                                                <li class="step0 text-center" id="step2">PrePare</li>
                                            @endif

                                             @if($order->state == "done")
                                                <li class="step0 text-muted text-right active" id="step3">Done</li>
                                            @else
                                                <li class="step0 text-muted text-right " id="step3">Done</li>
                                            @endif
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
                    <h3 style="color:0000FF;font-weight: bold;"> You Didn't Apply the Quiz , apply <a href="/"> Now </a></h3>
                    @endif
                    <div class="tab-pane fade" id="tab2default">Default 2</div>

                </div>
            </div>
        </div>
    </div>

</div>
            </div>
        </div>
    </div>
</div>
<!-- end -->
@endsection