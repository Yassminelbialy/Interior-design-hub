@extends('admin.companyBase')
@section('CompanyAdminBase')


<div  style="    color: white;
margin: auto;
text-align: center; " >

    <h1>  -welcome to login Admin Company</h1>
    <br>
    <br>
    <h2>Your profile Info Progress</h2>
    <br>
    <h1>Is {{$percent}}  %</h1>
    <div class="progress" style="width: 80%;    display: inline-flex;">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$percent}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

    <div class="row">
        <div class="col">

            <ul>
            @foreach ($data as $item)
                <li>
                    <?php
                    echo $item ;
                    ?>
                </li>
            @endforeach

          </ul>
        </div>

    </div>

</div>


@endsection
