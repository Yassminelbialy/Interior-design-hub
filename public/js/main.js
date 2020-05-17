$(function () {



    // start nav

    var $els = $('.menu a, .menu header');
    var count = $els.length;
    var grouplength = Math.ceil(count/3);
    var groupNumber = 0;
    var i = 1;
    $('.menu').css('--count',count+'');
    $els.each(function(j){
        if ( i > grouplength ) {
            groupNumber++;
            i=1;
        }
        $(this).attr('data-group',groupNumber);
        i++;
    });

    $('.menu footer button').on('click',function(e){
        e.preventDefault();
        $els.each(function(j){
            $(this).css('--top',$(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
            $(this).css('--delay-in',j*.1+'s');
            $(this).css('--delay-out',(count-j)*.1+'s');
        });
        $('.menu').toggleClass('closed');
        e.stopPropagation();
    });



  //start loading
$(window).on('load',function(){
    $('.loading_overlay').fadeOut(2000);
  });
  //end loading

      // start slide
      var win = $(window).height();
      var nav = $(".nav_container").innerHeight();
      $("#main-slider,.carousel-item").height(win - nav);


      // start carousel option
      $('.carousel').carousel({
        interval: 12000,
        hover:false
      })

      // start all features
      $(".allFeatures ul li").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        if ($(this).data("class") == "all") {
          $(".img").css("opacity", "1");
        } else {
          $(".shuffle-images .img ").css("opacity", ".1");

          $($(this).data("class")).parent().css("opacity", "1");
        }
      });

      // start option box

      $(".fa-gear").click(function () {
        $(".option-box").toggleClass("active ");
        if ($(".option-box").hasClass("active")) {
          $(".option-box").animate({
            left: "0",
          });
        } else {
          $(".option-box").animate({
            left: "-270px",
          });
        }
      });

      // change mode seasons

      $("input[name=mode_season]").change(function () {
        var v = $(this).val();


        if (v == "summer") {
          $(".pop_up p").text("sun mode");
          $(".pop_up")
            .css({
              display: "block",
              transform:
                "scale(1) rotate(360deg)  rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)  rotate(360deg)  rotate(360deg)   ",
              transition: "1s",
            })
            .delay(1000)

            setTimeout(function(){
              $(".pop_up")
              .css({
                display: "block",
                transform:
                  "scale(0)  ",
                transition: "1s",
              })
              $(".center_sun").show(1000);
              $(".center_sun").siblings().hide(1000);

            },3000)

        } else if (v == "winter") {
          $(".pop_up p").text("winter mode");
          $(".pop_up")
            .css({
              display: "block",
              transform:
                   "scale(1) rotate(360deg)  rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)  rotate(360deg)  rotate(360deg)   ",
              transition: "1s",
            })
            .delay(1000)

            setTimeout(function(){
              $(".pop_up")
              .css({
                display: "block",
                transform:
                  "scale(0) ",
                transition: "1s",
              })
              $(".rain").show(1000);
              $(".rain").siblings().hide(1000);

            },3000)


        } else if (v == "spring") {
          $(".pop_up p").text("spring mode");
          $(".pop_up")
            .css({
              display: "block",
              transform:
                   "scale(1) rotate(360deg)  rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)  rotate(360deg)  rotate(360deg)   ",
              transition: "1s",
            })
            .delay(1000)
            setTimeout(function(){
              $(".pop_up")
              .css({
                display: "block",
                transform:
                  "scale(0)  ",
                transition: "1s",
              })
              $(".spring").show(1000);
              $(".spring").siblings().hide(1000);
            },3000)

        } else if (v == "snow") {
          $(".pop_up p").text("snow mode");
          $(".pop_up")
            .css({
              display: "block",
              transform:
              "scale(1) rotate(360deg)  rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)   rotate(360deg)  rotate(360deg)  rotate(360deg)   ",          transition: "1s",
            })
            .delay(1000)

            setTimeout(function(){
              $(".pop_up")
              .css({
                display: "block",
                transform:
                  "scale(0) ",
                transition: "1s",
              })
              $(".snow").show(1000);
              $(".snow").siblings().hide(1000);

            },3000)
        }
      });


      // start change fonts
      $("select[name=fonts]").change(function () {
        let font_value =$(this).val()
        $("*").css("fontFamily",font_value)
      });

      //   start scroll
      $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
          $("a.btn_up").show(1000);
        } else {
          $("a.btn_up").hide(1000);
        }
      });

      $("a.btn_up").click(function (e) {
        e.preventDefault();
        console.log("asda");
        $("body , html ").animate(
          {
            scrollTop: 0,
          },
          1000
        );
      });

      $(".navbar ul li  a").click(function () {
        $("html , body").animate(
          {
            scrollTop: $("#" + $(this).data("scroll")).offset().top + 1,
          },
          1000
        );
      });

      $(".navbar  li a").click(function () {
        $(".navbar  a").removeClass("active");

        $(this).addClass("active");
      });

      var scrolltotoptop = $(".scroll-to-top");

      $(window).scroll(function () {
        $(".section").each(function () {
          if ($(window).scrollTop() > $(this).offset().top) {
            var secion_id = $(this).attr("id");

            $(".navbar  a").removeClass("active");

            $(".navbar ul li a[data-scroll='" + secion_id + "']").addClass(
              "active"
            );
          }
        });

        if ($(window).scrollTop() > 1000) {
          scrolltotoptop.fadeIn();
        } else {
          scrolltotoptop.fadeOut();
        }
      });

      scrolltotoptop.click(function (e) {
        e.preventDefault();

        $("html , body ").animate(
          {
            scrollTop: 0,
          },
          1000
        );
      });

      AOS.init();


      // start counter up

      let nCount = (selector) => {
        $(selector).each(function () {
          $(this).animate(
            {
              Counter: $(this).text(),
            },
            {
              // A string or number determining how long the animation will run.
              duration: 4000,
              // A string indicating which easing function to use for the transition.
              easing: "swing",
              /**
             A function to be called for each animated property of each animated element.
              This function provides an opportunity to
               modify the Tween object to change the value of the property before it is set.
             */
              step: function (value) {
                $(this).text(Math.ceil(value));
              },
            }
          );
        });
      };

      let a = 0;
      $(window).scroll(function () {
        // The .offset() method allows us to retrieve the current position of an element  relative to the document
        let oTop = $(".numbers").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() >= oTop) {
          a++;
          nCount(".rect > h1");
        }
      });


      // start testimonials

      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 60,
          stretch: 0,
          depth: 600,
          modifier: 1,
          slideShadows : true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });


    });
