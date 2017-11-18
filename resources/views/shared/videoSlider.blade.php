<section class="section section-video from-bottom">
  <div class="wrapper">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.3/js/swiper.min.js"></script>

    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <p class="video-title">{{__('Watch this simple three-minute video explainer for Tokenbox')}}.</p>

              <div class="video" data-url="https://www.youtube.com/embed/1YTLvqZNW_4">
                <div class="video_preview" style="background-image: url(/assets/front/img/video-thumb.jpg?v=2)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <p class="video-title">{{__('Why you can trust crypto funds and traders on Tokenbox platform')}}.</p>

              <div class="video" data-url="https://www.youtube.com/embed/cJzAPj6jlOw">
                <div class="video_preview" style="background-image: url(/assets/front/img/video2-thumb.jpg?v=2)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <p class="video-title">{{__('Watch how Tokenbox simplifies investments process in the crypto field')}}.</p>

              <div class="video" data-url="https://www.youtube.com/embed/e6xWiM0TQvU">
                <div class="video_preview" style="background-image: url(/assets/front/img/video3-thumb.jpg?v=2)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <p class="video-title">{{__('How blockchain technology works for investors & traders on Tokenbox platform')}}.</p>

              <div class="video" data-url="https://www.youtube.com/watch?v=nHYWTwCGV10">
                <div class="video_preview" style="background-image: url(/assets/front/img/video4-thumb.jpg?v=2)">
                  <div class="video_play"></div>
                </div>
              </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
  </div>

  <script>
    var mySwiper = new Swiper ('.swiper-container', {
      centeredSlides: true,
      spaceBetween: 100,
      slideToClickedSlide: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
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
      display: none;
      margin-top: 18px;
      top: 50%;
      background-image: none;
      width: 30px;
      height: 30px;
      transition: .4s opacity;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
      opacity: 0.7;
    }

    .swiper-button-prev {
      left: -58px;
      border-bottom: 4px solid #abb4bb;
      border-left: 4px solid #abb4bb;
      transform: rotate(45deg);
    }

    .swiper-button-next {
      right: -58px;
      border-bottom: 4px solid #abb4bb;
      border-left: 4px solid #abb4bb;
      transform: rotate(-135deg);
    }

    .swiper-pagination {
      margin-top: 30px;
      top: 100%;
      bottom: auto;
    }

    .swiper-pagination-bullet {
      width: 10px;
      height: 10px;
      background: #abb4bb;
      opacity: 1;
    }

    .swiper-pagination-bullet-active {
      background: #ee3d49;
    }

    @media (min-width: 760px) {
      .swiper-pagination {
        display: none;
      }

      .swiper-button-prev,
      .swiper-button-next {
        display: block;
      }
    }

    .swiper-button-disabled {
      display: none;
    }
  </style>
</section>
