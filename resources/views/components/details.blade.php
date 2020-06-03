<div class="details">
    <!-- Button trigger modal -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Confirm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            

            @if(count($errors) > 0)

                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif

            @if($msg = Session::get('success'))
                <div class="alert alert-success">{{$msg}}</div>
            @endif
            <form action="{{ url('/contact') }}" method="post">

                    @csrf

                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                        <i class="fa fa-user"></i>
                        <input type="text"  class="form-control validate" name="username">
                      
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
                    </div>
                    <div class="md-form mb-2">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="phone" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone</label>
                    </div>
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="date" data-target="#datetimepicker1"/>
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="text-center">
        <bottom class="btn btn_info mt-4" style="position: relative;top: 172px;" data-toggle="modal" data-target="#modalLoginForm">Launch
            Modal Contact Form
        </bottom>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>