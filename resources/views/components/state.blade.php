<section class="info">
    <h1 class="text-center">Info</h1>
    <div class="container">
        <div class="row">

        @forelse($topics as $topicsData)
            <div class="col-md-6 col-lg-4 mt-3 state">
                <div class="row">
                    <div class="col-md-4">
                        <img data-src="{{ asset('images/topicImages/'. $topicsData->image)}}" alt="state" class="mb-2"/>
                    </div>
                    <div class="col-md-8">
                        <h3 class="text_info">
                            {{ $topicsData->title }}
                        </h3>
                    </div>
                </div>
                
            <button class="btn btn_info btn-block" data-toggle="modal" data-target="#modalLoginForm{{$topicsData->id}}">View Details</button>
            <div class="modal fade" id="modalLoginForm{{$topicsData->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <img class="card-img-top" data-src="{{ asset('images/topicImages/'. $topicsData->image)}}" alt="Topic" style="height:350px">
                  <div class="projectDetails mt-5">
                    <p class="card-title text-dark p-2"><strong class="text-info">Topic Hint: </strong>{{ $topicsData->hint }}</p>
                    <p class="card-text text-dark mb-2 p-2"><strong class="text-info">Topic Description: </strong>{{ $topicsData->description }}</p>

                  </div>
                </div>
              </div>
            </div>


            </div>
        @empty

            <div class="alert alert-info btn-block">
                No Topics Yet ...
            </div>
        @endforelse
           
        </div>
    </div>
</section>