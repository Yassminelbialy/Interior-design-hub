    <!-- start testimonial slider -->
    <section class="testimonial_slider mt-3 text-center">
      <div class="custom_border">
        <h2>Our Testimonial</h2>
      </div>
      <div class="owl-carousel owl-theme">
        @foreach ($reviews as $review )
        <div class="items">
          <img class="slider_image" data-src="images/review/{{$review->image}}" alt="book" />
        </div>
        @endforeach
      </div>
    </section>

    <!-- start testimonial slider -->