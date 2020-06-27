<div class="modal fade" id="exampleModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apply Form For Jo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"
        style="
            font-style: normal;
            color: darkgrey;">

  <div class="alerts alert alert-danger">
    <ul>
    </ul>
</div>


@csrf

<div id='consmodal'class="modal-body mx-3">
    <div class="md-form mb-2">
        <i class="fa fa-user"></i>
        <input id="jobname" class="input--style-4" type="text" name="fullName">

        <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
    </div>
    <div class="md-form mb-2">
        <i class="fa fa-internet-explorer"></i>
        <input id='joburl' class="input--style-4" type="text" name="urlProtofolio">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your urlProtofolio</label>
    </div>
    <div class="md-form mb-2">
        <i class="fa fa-calendar-check"></i>
        <input id='jobage'class="input--style-4" type="date" name="age">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Age</label>
    </div>

    <div class="md-form mb-2">
        <i class="fa fa-envelope-open"></i>
        <input id="jobemail" class="input--style-4" type="email" name="email">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Email</label>
    </div>
    <div class="md-form mb-2">
        <i class="fa fa-phone"></i>
        <input id='jobphone'class="input--style-4" type="number" name="phone">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone</label>
    </div>
    <div class="md-form mb-2">
        <i class="fa fa-file-pdf"></i>
        <label  data-error="wrong" data-success="right" for="defaultForm-pass">Your CV :</label>
    <input id="jobcv"  class="input--style-4" type="file"  name="cv">
    </div>


</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id='jobsubmit' data-job="{{$id}}"  class="btn btn-success btn-block">Submit</button>
        </div>
      </div>
    </div>
  </div>
