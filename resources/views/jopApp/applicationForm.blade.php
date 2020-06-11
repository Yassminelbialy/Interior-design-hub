<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Designa For Jop Application</title>

    <!-- Icons font CSS-->
    <link href="/applyjop/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/applyjop/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/applyjop/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/applyjop/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/applyjop/css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                    @endif
                    <h2 class="title">Registration Form For Jop Application</h2>
                    {{ Form::open(['route' => ['applyjopform',$id],'enctype' => 'multipart/form-data','method'=>'post'])}}
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Full Name</label>
                                <input class="input--style-4" type="text" name="fullName">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">URL Protofolio</label>
                                <input class="input--style-4" type="text" name="urlProtofolio">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="age">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="text" name="phone">
                            </div>
                        </div>
                    </div>


                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">CV</label>
                                <input id="myfile" style="display: none" class="myfile input--style-4 d-none" type="file" name="file">
                                <a onclick="document.querySelector('.myfile').click()" class="btn btn--radius-2 btn--blue">Upload CV</a>

                            </div>
                        </div>
                        <div class="col-2">

                        </div>
                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/applyjop/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/applyjop/vendor/select2/select2.min.js"></script>
    <script src="/applyjop/vendor/datepicker/moment.min.js"></script>
    <script src="/applyjop/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/applyjop/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->