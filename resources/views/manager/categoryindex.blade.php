<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->





<link rel="stylesheet" type="text/css" href="{{ asset('css/categoryshowstyles.css') }}" >

<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR Category</h5>
        <div class="row">

{{-- {{$data}} --}}
@forelse ($data as $item)

                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" >
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/categoryimages/{{$item->image}}" alt="card image"></p>
                                            <h2 class="card-title">{{$item->name}}</h2>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- ./Team member -->
@empty
    <p>empty</p>
@endforelse



        </div>
    </div>
</section>
<!-- Team -->
