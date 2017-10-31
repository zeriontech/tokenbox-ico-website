<section class="section section-video">
  <div class="wrapper">
    <p class="video-title">{{__('Watch this simple three-minute video explainer for Tokenbox')}}.</p>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/js/swiper.min.js"></script>

    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="video">
                <div class="video_preview" style="background-image: url(/assets/front/img/video-thumb.jpg)">
                  <div class="video_play"></div>
                </div>
              </div>
              <p class="video-title">{{__('Watch this simple three-minute video explainer for Tokenbox')}}.</p>
            </div>
            <div class="swiper-slide">
              <div class="video">
                <div class="video_preview" style="background-image: url(/assets/front/img/video-thumb.jpg)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="video">
                <div class="video_preview" style="background-image: url(/assets/front/img/video-thumb.jpg)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
  </div>

  <script>
    var mySwiper = new Swiper ('.swiper-container', {
      centeredSlides: true,
      spaceBetween: 100,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    })
  </script>

  <style>
    .swiper-slide {
      max-width: 640px;
    }

    .swiper-button-prev,
    .swiper-button-next {
      margin-top: -16px;
      top: 50%;
      background-image: none;
      width: 30px;
      height: 30px;
    }

    .swiper-button-prev {
      border-bottom: 4px solid #3434bb;
      border-left: 4px solid #3434bb;
      transform: rotate(45deg);
    }

    .swiper-button-next {
      border-bottom: 4px solid #3434bb;
      border-left: 4px solid #3434bb;
      transform: rotate(-135deg);
    }

    .swiper-button-disabled {
      display: none;
    }
  </style>
</section>
