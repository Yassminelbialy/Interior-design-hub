@extends('admin.base')

@section('adminbase')

<div class="text-center">
    <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
        <thead>

            <tr>
                <th scope="col" class="text-light h3">#</th>
                <th scope="col" class="text-light h3">image</th>
                <th scope="col" class="text-light h3">Name</th>
                <th scope="col" class="text-light h3">Hint</th>
                <th scope="col" class="text-light h3">Statement</th>
                <th scope="col" class="text-light h3">video</th>
                <th scope="col" class="text-light h3">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($ceoInfo as $ceo)
            <tr>
                <th scope="row">{{$ceo->id}}</th>
                <td><img src="/images/{{$ceo->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
                <td>{{$ceo->name}}</td>
                <td>{{$ceo->hint}}</td>
                <td style="width: 30%" class="justify-content: center;">{{$ceo->statement}}</td>
                <td>
                    <div class="stats_video">
                        <div class="overlay"></div>
                        <img data-src="/images/7.jpg" alt="" />
                        <div class="wrapper">
                            <div class="icon-wrapper">
                                <div class="icon">
                                    <i class="fa video2_btn fa-play" data-toggle="modal" data-target="#video2"></i>
                                    <!-- Modal -->
                                    <div class="modal fade" id="video2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <video controls id="vidEle" class="embed-responsive-item" allowscriptaccess="always" allow="autoplay">
                                                            <source src="/videos/{{$ceo->video}}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('manager.alexandra.edit', $ceo->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection