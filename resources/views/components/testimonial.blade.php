    <!-- start testimonial slider -->
    <section class="testimonial_slider  text-center">
      <div class="custom_border">
        <h2>Testimonial</h2>
      </div>
      <div class="owl-carousel owl-theme">

      <div class="items">
          <img class="slider_image" data-src="images/screenshot1.jfif" alt="book" />
        </div>
        <div class="items">
          <img class="slider_image" data-src="images/screenshot1.jfif" alt="book" />
        </div>
        <div class="items">
          <img class="slider_image" data-src="images/screenshot1.jfif" alt="book" />
        </div>
        <div class="items">
          <img class="slider_image" data-src="images/screenshot1.jfif" alt="book" />
        </div>
        <div class="items">
          <img class="slider_image" data-src="images/screenshot1.jfif" alt="book" />
        </div>
        @foreach ($reviews as $review )
        <div class="items">
          <img class="slider_image" data-src="/images/review/{{$review->image}}" alt="book" />
        </div>
        @endforeach
      </div>
    </section>

    <!-- start testimonial slider -->
