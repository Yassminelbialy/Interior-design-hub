    <section class="services text-center">

        <h2 class="mt-5">Our Services</h2>
        <div class="services_content">
            <div class="service_box">
                @foreach ($services as $service )
                <div class="box">
                    <div class="icon">{{$service->id}}</div>
                    <div class="content">
                        <h3>{{$service->title}}</h3>
                        <p>
                            {{$service->description}}
                        </p>
                       
                    </div>
                </div>  
                @endforeach              
            </div>
        </div>
    </section>
    <!-- end services -->
