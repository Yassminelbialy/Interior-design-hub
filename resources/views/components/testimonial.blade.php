     <!-- start testimonial slider -->
     <section class="testimonial_slider  text-center">
         <h2>Testimonial</h2>
         <div class="custom_border"></div>
         <div class="owl-carousel owl-theme">
             @foreach ($reviews as $review )
             <div class="items">
                 <img class="slider_image" data-src="/images/review/{{$review->image}}" alt="reviews" />
             </div>
             @endforeach

             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
             <div class="items">
                 <img class="slider_image" data-src="/images/1.jpg" alt="reviews" />
             </div>
         </div>
     </section>
     <!-- start testimonial slider -->
