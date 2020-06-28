{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/projectshowstyles.css') }}" --}}
{{-- {{-- {{$data}} --}}

{{-- <section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            @forelse ($data as $item)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                <p><img class=" img-fluid" src="/projectimages/{{$item->mainImage}}" alt="card image"></p>
<h4 class="card-title">{{$item->title}}</h4>
<p class="card-text">{{$item->hint}}.</p>
<a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
</div>
</div>
</div>
<div class="backside">
    <div class="card">
        <div class="card-body text-center mt-4">
            <h4 class="card-title">Sunlimetech</h4>
            <p class="card-text">{{$item->description}}</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                        <i class="fa fa-skype"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
@empty
@endforelse
</div>
</div>
</section> --}}
@extends('admin.companyBase')
@section('CompanyAdminBase')

<div class="text-center">
    <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
        <thead>
            <tr>
                <td colspan="6"><a href="{{route('company.project.create')}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>
            </tr>
            <tr>
                <th scope="col" class="text-light h6" style="font-weight:700">#</th>
                <th scope="col" class="text-light h6" style="font-weight:700">image</th>
                <th scope="col" class="text-light h6" style="font-weight:700">title</th>
                <th scope="col" class="text-light h6" style="font-weight:700">category</th>
                <th scope="col" class="text-light h6" style="font-weight:700">hint</th>
                <th scope="col" class="text-danger h6" style="font-weight:700">actions</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img src="/projectimages/{{$item->mainImage}}" style="display: inline-block; height: 100px ; width:100px ; background-color:red;"></img></td>
                <td>{{$item->title}}</td>
                <td>{{$item->category->name}}</td>
                <td style="width: 30%" class="justify-content: center;">{{$item->hint}}</td>
                <td> &ensp;
                    <a href="{{route('company.project.images.index',$item->id)}}"> <i class="fas fa-binoculars fa-2x" style="color: green"></i></a>

                    &ensp;
                    <a href="{{ route('company.project.edit', $item->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>

                    &ensp;
                    {!!Form::open(['route'=>[ 'company.project.destroy' , $item->id],'method'=>'delete','style'=>' display: inline-block '])!!}
                    {{ Form::button('<i style="color:red"class="fa fa-trash fa-2x"></i>', ['type' => 'submit'] )  }}

                    {!! Form::close() !!}
                </td>

            </tr>
            @empty

            @endforelse
</div>
</tbody>
</table>
</div>
<div class="row sss text-center">
    <div class="col-12 text-center d-flex justify-content-center">
        {{$data->links()}}
    </div>
</div>
@endsection
