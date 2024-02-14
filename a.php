<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    background: #eee;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    padding-top: 100px;
    padding-bottom: 50px;
  }

  .swiper-slide {
    background-position: center;
    background-size: cover;
    position: relative;
    width: 1000px;
    height: 500px;
    transform: translate3d(0) !important;
    box-shadow: #eee 0px 0px 200px 20px;
  }

  .swip-content {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .4);
    position: absolute;
    display: grid;
    place-items: center;
    z-index: 1;
    color: white;
    font-size: 2rem;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 2.2%;
    box-shadow: #0000006b 0px 2px 10px;
  }

  .swiper-slide {
    /* opacity: .6 !important; */
    margin-bottom: 2% !important;
  }

  .swiper-slide.swiper-slide-active {
    transform: scale(1.2) !important;
    opacity: 1 !important;
  }

  .our-recent {
    font-size: 42px;
    letter-spacing: 4px;
    line-height: 55px;
    text-transform: uppercase;
    color: #030406;
    font-weight: 700;
    font-family: "Inter";
    text-align: center;
  }

  .our-recent-paragraph {
    font-size: 28px;
    letter-spacing: 1px;
    line-height: 39px;
    color: #000000;
    font-weight: 300;
    font-family: "Inter";
    text-align: center;
    margin-bottom: 132px;
    margin-top: 20px;
  }

  .swipper-border {
    border: 3px #21D0B3 solid;
    width: 21%;
    margin: auto;
  }

  .swipper-button1 {
    width: 100%;
    height: 100%;
    display: grid;
    place-items: center;
    margin: auto;
  

  }

  .our-button {
    width: 240px;
    height: 60px;
    margin-top: 80px;
    background-color: #21D0B3;
    border:2px solid #21D0B3;
    border-left: none;
    font-size: 22px;
    color: #ffffff;
    font-weight: 500;
    font-family: "Inter";
    text-align: center;
 
  }

  @media (max-width: 1440px) {
    .our-recent-paragraph {
      font-size: 20px;
      line-height: 29px;
    }

    .our-recent {
      font-size: 32px;

    }

    .swipper-border {
      height: 2px;
    }

    .swiper-slide {
      width: 450px;
      height: 350px;
    }
  }

  @media only screen and (max-width: 450px) {
    .our-recent-paragraph {

      font-size: 22px;
      padding: 0 2%;
    }



  }
</style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper bg-white">
    <div class="swipper-content">
      <h3 class="our-recent">Our Recent Work</h3>
      <div class="swipper-border"></div>
      <p class="our-recent-paragraph">Customer Experience is everything! We design & create solutions by spotting
        customers’
        <br>actions, emotions, and unmet needs. We make enterprises that impact lives.
      </p>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 36.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div>  -->
        <img src="./images/Layer 35.webp" />
      </div>
    </div>
    <div class="swipper-button1"><button type="button" class="our-button">See Our Portfolio</button></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  autoplay: {
    delay: 3000, // Time in milliseconds between slides
    disableOnInteraction: false, // Set to false so autoplay will not be stopped when the user interacts with the slider
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
  },
});
  </script>