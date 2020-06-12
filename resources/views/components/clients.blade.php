    <!-- start clients -->
    <section class="clients text-center">
      <div class="custom_border">
        <h2>Our Clients</h2>
      </div>

      <div class="container">
        <div class="row">
          @foreach ($logos as $logo )
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/logo/{{$logo->image}}" alt="image client" class="w-100 h-100" />
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- end clients-->
