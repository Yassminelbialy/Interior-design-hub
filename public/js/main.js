$(function () {

       // start pop up
       setTimeout(()=>{
      $(".open_pop_up").click()
      },45000)

      // start next step
      $(".next_step").click(function () {
      $(".right").hide();
      $(".right2").show();
    });

    // start quizes
    $(".open_quiz").click(function(){
      $(".all_quizes").show()
      $(".pop_up").hide()
    })

    $(".quiz6 .done").click(function(){
        $(".open_pop_up").click()
    })


      $(".quiz1  .checkbox_container input[type='radio'] , .quiz2 .checkbox_container input[type='radio'] ,.quiz3  .checkbox_container input[type='radio'] ").on("change", function () {
        let refrenceCheckBtn = $(this);

          refrenceCheckBtn.parent().siblings("img").css("opacity", "1");

          refrenceCheckBtn.parent().parent().parent().siblings().children().find('img').css("opacity", ".7");

      });

      $(".quiz4  .checkbox_container input[type='radio']").change(function(){

        let refrenceCheckBtn = $(this);

        refrenceCheckBtn.parents(".choose_multi").addClass("selected")

        refrenceCheckBtn.parents(".choose_multi").siblings(".choose_multi").removeClass("selected")

      })

      $(".quiz5 .checkbox_container input[type='checkbox'] , .quiz6 .checkbox_container input[type='checkbox'] ").on("click",function(){

        let refrenceCheckBtn = $(this);
        if (refrenceCheckBtn.prop("checked")) {
          refrenceCheckBtn.parent().parent().addClass("selected")
        } else {
          refrenceCheckBtn.parent().parent().removeClass("selected")
        }
      })

      $(".quiz6 .checkbox_container input[type='checkbox'] ").on("click",function(){

          let refrenceCheckBtn = $(this);
          if (refrenceCheckBtn.prop("checked")) {
            refrenceCheckBtn.parent().parent().addClass("selected")
          } else {
            refrenceCheckBtn.parent().parent().removeClass("selected")
          }
    })

            // start range slider
        slider=$("#myrange")
        let output =$("#rangevalue")
        output.html(slider.val())


        slider.mousemove(function(){
            output.html($(this).val())
            let sliderValue =slider.val();
            let color = `linear-gradient(90deg , #e0c89c ${sliderValue}% ,rgb(214,214,214)  ${sliderValue}% ) `
            $(this).css("background",color)
        })

    // start testimonial
    $(".owl-carousel").owlCarousel({
        slideSpeed: 10,
        autoplay: 10,
        loop: true,
        margin: 15,
        responsive: {
          0: { items: 2 },
          600: { items: 3 },
          1000: { items: 5 },
        },
        nav: true,

      });




    //   start video screen

      var $videoSrc;
      $('.video-btn').click(function() {
          $videoSrc = $(this).data( "src" );
      });
      console.log($videoSrc);



      // when the modal is opened autoplay it
      $('#myModal').on('shown.bs.modal', function (e) {

      // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
      $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
      })



      // stop playing the youtube video when I close the modal
      $('#myModal').on('hide.bs.modal', function (e) {
          // a poor man's stop video
          $("#video").attr('src','');
      })

    });
