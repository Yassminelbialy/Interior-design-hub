    <!-- start clients -->
    <section class="clients text-center">
      <div class="custom_border">
        <h2>Our Clients</h2>
      </div>

      <div class="container">
        <div class="row">

        <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client1.PNG" alt="etisalat" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img class="" data-src="images/client2.PNG" alt="cnn" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client3.PNG" alt="google" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client4.PNG" alt="vodafone" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img class="" data-src="images/client5.PNG" alt="we.png" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client6.PNG" alt="adidas.jpg" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client7.PNG" alt="etisalat" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img class="" data-src="images/client8.PNG" alt="cnn" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client9.PNG" alt="google" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client1.PNG" alt="vodafone" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img class="" data-src="images/client2.PNG" alt="we.png" />
          </div>
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/client3.PNG" alt="adidas.jpg" />
          </div>


          @foreach ($logos as $logo )
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/logo/{{$logo->image}}" alt="image client" class="w-100 h-100" />
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- end clients-->
