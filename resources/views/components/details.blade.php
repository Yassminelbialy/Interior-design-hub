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
            <form action="" method="">
                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                        <i class="fa fa-user"></i>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
                    </div>
                    <div class="md-form mb-2">
                        <i class="fa fa-phone"></i>
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="text-center">
    <a href="" class="btn btn-info btn-rounded mt-4" style="position: relative;top: 172px;" data-toggle="modal" data-target="#modalLoginForm">Launch
        Modal Login Form</a>
    </div>
</div>