
$(function () {

    $('.slide').each(function(index){
        $(this).addClass('slide-'+index)
        if(index==0){
            $(this).addClass('slide-'+index).addClass('active')
        }
    })


    let win = $(window);
    win.on("resize", function () {
        if (win.width() <= 920) {
              $(".cube").prepend($(".contact_us").addClass("responsive_contact"))
        }
        else{
            $(".menu .navbar-brand").after($(".contact_us").removeClass("responsive_contact"))
        }


    });
    //start loading
    $(window).on("load", function () {
        $(".cube_container_loading").fadeOut(2000);
    });
    //end loading

    // start modal images
    var elem = document.documentElement;

    $(".slide_image").click(function () {
        openFullscreen();
        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }

        $(".openImagesModal").click();

        imageTarget = $(this).children("img");

        imageTargetSrc = imageTarget.data("3d");

        $("#imagesModal .modal-body iframe").attr("src", imageTargetSrc);
    });

    // start btn next control

    $("#imagesModal .modal-body .next").click(function () {
        let nextImage = imageTarget.parent().next().children("img");
        imageTarget = nextImage;
        $("#imagesModal .modal-body iframe").attr(
            "src",
            imageTarget.data("3d")
        );

        if (imageTarget.parent().is(":last-child")) {
            $(".next").hide();
            $(".prev").show();
        } else {
            $(".next").show();
            $(".prev").show();
        }
    });

    // start btn prev control

    $("#imagesModal .modal-body .prev").click(function () {
        let nextImage = imageTarget.parent().prev().children("img");
        imageTarget = nextImage;
        $("#imagesModal .modal-body iframe").attr(
            "src",
            imageTarget.data("3d")
        );

        if (imageTarget.parent().is(":first-child")) {
            $(".prev").hide();
            $(".next").show();
        } else {
            $(".prev").show();
            $(".next").show();
        }
    });

    // start close modal images
    $("#imagesModal .close").click(function () {
        closeFullscreen();

        function closeFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    });


    // start statitics counter



  // start statitics
  let nCount = (selector) => {
    $(selector).each(function () {
      $(this).animate(
        {
          Counter: $(this).text(),
        },
        {

          duration: 6000,

          easing: "swing",


          step: function (value) {
            $(this).text(Math.ceil(value));
          },
        }
      );
    });
  };

  let a = 0;
  $(window).scroll(function () {

    let oTop = $(".statitics").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop()+10 >= oTop) {
        $(".statitics .counter").css({
            transform:"scale(1.2)",
            transition:"all 3s"
        })
      a++;
      nCount(".counter_content > .number_c");
    }
  });


    // start nav
    $("body").on("click", ".nav-toggle.closed", function (e) {
        e.preventDefault();
        var pageDiv = $(".page");
        navCube = $(".nav-cube");
        var closeSwitch = $(this);
        closeSwitch.addClass("opened");
        closeSwitch.removeClass("closed");
        closeSwitch.data("cube-target", ".nav-cube");
        pageDiv.addClass("open");
        navCube.addClass("transform");
        $(this).html("<i class='fas fa-times'></i>");
    });

    $("body").on("click", ".nav-toggle.opened", function (e) {
        e.preventDefault();
        var pageDiv = $(".page");
        $(this).removeClass("opened").addClass("closed");
        pageDiv.removeClass("open");
        navCube.removeClass("transform");
        $(this).html("<i class='fas fa-bars'></i>");
    });

    // start change theme

    $(".color_container ul li").click(function () {
        let themeColor = $(this).attr("data-value");

        if (themeColor == "#c19e70") {
            $(".menu").css("background", "#141414");
        } else {
            $(".menu").css("background", themeColor);
        }

        $(":root").css("--secondColor", themeColor);
    });

    //   start slider



    var $slider = $(".slider"),
        $slideBGs = $(".slide__bg"),
        diff = 0,
        curSlide = 0,
        numOfSlides = $(".slide").length - 1,
        animating = false,
        animTime = 500,
        autoSlideTimeout,
        autoSlideDelay = 6000,
        $pagination = $(".slider-pagi");

    function createBullets() {
        for (var i = 0; i < numOfSlides + 1; i++) {
            var $li = $("<li class='slider-pagi__elem'></li>");
            $li.addClass("slider-pagi__elem-" + i).data("page", i);
            if (!i) $li.addClass("active");
            $pagination.append($li);
        }
    }

    createBullets();

    function autoSlide() {
        autoSlideTimeout = setTimeout(function () {
            curSlide++;
            if (curSlide > numOfSlides) curSlide = 0;
            changeSlides();
        }, autoSlideDelay);
    }

    autoSlide();

    function changeSlides() {
        $slider.addClass("animating");
        $slider.css("top");
        $(".slide").removeClass("active");
        $(".slide-" + curSlide).addClass("active");

        setTimeout(function () {
            $slider.removeClass("animating");
            animating = false;
        }, animTime);

        window.clearTimeout(autoSlideTimeout);
        $(".slider-pagi__elem").removeClass("active");
        $(".slider-pagi__elem-" + curSlide).addClass("active");
        $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
        $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
        diff = 0;
        autoSlide();
    }

    function navigateLeft() {
        if (curSlide > 0) curSlide--;
        changeSlides();
    }

    function navigateRight() {
        if (curSlide < numOfSlides) curSlide++;
        changeSlides();
    }

    $(document).on("mousedown", ".slider", function (e) {
        window.clearTimeout(autoSlideTimeout);
        var startX = e.pageX,
            winW = $(window).width();
        diff = 0;

        $(document).on("mousemove ", function (e) {
            var x = e.pageX;
            diff = ((startX - x) / winW) * 70;

            $slider.css(
                "transform",
                "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)"
            );
            $slideBGs.css(
                "transform",
                "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)"
            );
        });
    });

    $(document).on("mouseup touchend", function (e) {
        $(document).off("mousemove touchmove");

        if (diff <= -8) {
            navigateLeft();
        }
        if (diff >= 8) {
            navigateRight();
        }
    });

    $(document).on("click", ".slider-pagi__elem", function () {
        curSlide = $(this).data("page");
        changeSlides();
    });

    // start animate sections

    $(".nav-cube ul li  a").click(function () {
        $("html , body").animate(
            {
                scrollTop: $("#" + $(this).data("scroll")).offset().top - 100,
            },
            1000
        );
    });
    // start active li
    // $(".nav-cube ul li  a").click(function () {
    //     $(".nav-cube ul li  a").removeClass("active");

    //     $(this).addClass("active");
    // });

    var scrolltotoptop = $(".scroll-to-top");

    $(window).scroll(function () {
        $("section").each(function () {
            if ($(window).scrollTop() > $(this).offset().top - 110) {
                var secion_id = $(this).attr("id");

                $(
                    ".nav-cube ul li  a[data-scroll='" + secion_id + "']"
                ).addClass("active");

                $(".nav-cube ul li  a[data-scroll='" + secion_id + "']")
                    .parent()
                    .siblings()
                    .children()
                    .removeClass("active");
            }
        });

        // start fade btn to top show ann hidden

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

    // when click play video will play auto
    $(".fa-play").click(function () {
        $(this).siblings("div").children().find("video").get(0).play();
    });
    // when click close modal video will close
    $(".modal_video .close").click(function () {
        $(this).siblings("div").children("video").get(0).pause();
    });
    // when click out modal video will close

    $(".modal_video").click(function () {
        $(this).children().find("video").get(0).pause();
    });

    // animate body&html to top

    $(".call_me").on("click", function () {
        $("html , body").animate({
            scrollTop: 0,
        });
    });

    // strat progress
    function activeNavQuisez(willclick) {
        willclick.click(function () {
            let countActive = $(this).data("value");

            $(".number_of_quiz").text(countActive);

            for (var i = 0; i < countActive; i++) {
                navQuizes.eq(i).addClass("active_nav");
            }

            for (var i = countActive; i <= 5; i++) {
                navQuizes.eq(i).removeClass("active_nav");
            }
        });
    }

    let navQuizes = $(".nav-pills li a ");
    activeNavQuisez(navQuizes);
    let btnNext = $(".btn_next");
    activeNavQuisez(btnNext);

    // start open contact modal
    $(".buttons_call .phone").click(function () {
        $(".right").show();
        $(".open_contact_modal").click();
    });

    // start pop up
    setTimeout(() => {
        $(".open_pop_up").click();
    }, 2000);

    // start next step
    $(".next_step").click(function () {
        $(".right").hide();
        $(".right2").show();
    });

    // start quizes
    $(".open_quiz").click(function () {
        $(".open_contact_modal").click();
        setTimeout(() => {
            $(".open_quizes_modal").click();
        }, 500);
    });

    $(".quiz6 .done").click(function () {
        $(".open_pop_up").click();
    });

    $(
        ".quiz1  .checkbox_container input[type='radio'] , .quiz2 .checkbox_container input[type='radio'] ,.quiz3  .checkbox_container input[type='radio'] "
    ).on("change", function () {
        let refrenceCheckBtn = $(this);

        refrenceCheckBtn.parent().siblings("img").css("opacity", "1");

        refrenceCheckBtn
            .parent()
            .parent()
            .parent()
            .siblings()
            .children()
            .find("img")
            .css("opacity", ".7");
    });

    $(".quiz4  .checkbox_container input[type='radio']").change(function () {
        let refrenceCheckBtn = $(this);

        refrenceCheckBtn.parents(".choose_multi").addClass("selected");

        refrenceCheckBtn
            .parents(".choose_multi")
            .siblings(".choose_multi")
            .removeClass("selected");
    });

    $(
        ".quiz5 .checkbox_container input[type='checkbox'] , .quiz6 .checkbox_container input[type='checkbox'] "
    ).on("click", function () {
        let refrenceCheckBtn = $(this);
        if (refrenceCheckBtn.prop("checked")) {
            refrenceCheckBtn.parent().parent().addClass("selected");
        } else {
            refrenceCheckBtn.parent().parent().removeClass("selected");
        }
    });

    $(".quiz6 .checkbox_container input[type='checkbox'] ").on(
        "click",
        function () {
            let refrenceCheckBtn = $(this);
            if (refrenceCheckBtn.prop("checked")) {
                refrenceCheckBtn.parent().parent().addClass("selected");
            } else {
                refrenceCheckBtn.parent().parent().removeClass("selected");
            }
        }
    );

    // start modal thanks

    $(".quiz6 .done").click(function () {
        $(".open_quizes_modal").click();
        $(".open_thanks_modal").click();
    });

    // start range slider
    slider = $("#myrange");
    let output = $("#rangevalue");
    output.html(slider.val());

    slider.mousemove(function () {
        output.html($(this).val());
        let sliderValue = slider.val() / 50;
        let color = `linear-gradient(90deg , #e0c89c ${sliderValue}% ,rgb(214,214,214)  ${sliderValue}% ) `;
        $(this).css("background", color);
    });

    // start open quizes
    $(".open_quizes").click(function () {
        $(".open_quizes_modal").click();
    });

    // start testimonial



    //   start video screen

    var $videoSrc;
    $(".video-btn").click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);

    // when the modal is opened autoplay it
    $("#myModal").on("shown.bs.modal", function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr(
            "src",
            $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
        );
    });



      // start animate elements

      $(window).on("scroll", function () {



        if ($(window).scrollTop() + 600 >= $(".services").offset().top) {
          $(".services_content").css({
            opacity:1,
            top:"-130px"
          })
          }

        if ($(window).scrollTop() + 500 >= $(".description1").offset().top) {
          $(".description1").animate(
            {
              left: 0,
            },
            1000
          );
        }

        if ($(window).scrollTop() + 500 >= $(".description2").offset().top) {
          $(".description2").animate(
            {
              left: 0,
            },
            1000
          );
        }

        if ($(window).scrollTop() + 500 >= $(".description3").offset().top) {
          $(".description3").animate(
            {
              left: 0,
            },
            1000
          );
        }

        if ($(window).scrollTop() + 500 >= $(".description4").offset().top) {
          $(".description4").animate(
            {
              left: 0,
            },
            1000
          );
        }
        if ($(window).scrollTop() + 500 >= $(".description5").offset().top) {
          $(".description5").animate({
            left:0
          },1000)
        }

      });

});


    $(".owl-carousel").owlCarousel({
        slideSpeed: 10,
        autoplay: 10,
        loop: false,
        margin: 15,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            1000: { items: 5 },
        },
        nav: true,
    });

