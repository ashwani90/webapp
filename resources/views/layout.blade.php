<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
        <link rel="stylesheet" href="{{ asset('css/jkinda.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/remo.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/fontawesome-project/css/all.min.css') }}" />
        @yield('custom_css')

        <title>Jkinda | Delivering Success</title>
    </head>
    <body>

        <div class="navigation">
        <img src="/img/jkinda_logo.png" class="nav-logo" style="
    position: fixed;
    z-index: 100;
    top: 40px;
    left: 40px;
    height: 60px;
    width: 80px;
">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav navigation__background">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="/" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="/products" class="navigation__link">Products</a></li>
                    <li class="navigation__item"><a href="/services" class="navigation__link">Services</a></li>

                    <li class="navigation__item"><a href="/contact" class="navigation__link">Contact Us</a></li>
                    <li class="navigation__item"><a href="/en/blog" class="navigation__link">Blogs</a></li>
                </ul>
            </nav>
        </div>

        @yield('section')

          <footer class="footer">
            <div class="row footer__content">
              <div class="col-md-3 footer__details d-flex flex-column justify-content-around">
                <div class="footer__company">
                    <a href="/">
                <img width="70" height="50" src="/img/jkinda_logo.png" >
</a>
                </div>
                <div class="footer__about">
                  <h2>About Us</h2>
                  <span>We're a dynamic service-oriented organization dedicated to providing AI-based solutions to businesses at a rapid pace</span>
                </div>
                <div class="footer__contact d-flex flex-column">
                  <h2>Contact Us</h2>
                  <span>+91 9719820967</span>
                  <span>jkindaat@gmail.com</span>
                </div>
              </div>
              <div class="col-md-3 footer__details">
                <div  class="footer__links_about">
                  <h2>Information</h2>
                  <a href="/contact">Contact Us</a>
                  <a href="/products">Projects</a>
                  <a href="/services">Services</a>
                  <a href="/blogs">Blogs</a>
                </div>
              </div>
              <div class="col-md-2 footer__details">
                <div  class="footer__links_help">
                  <h2>Helpful Links</h2>
                  <a href="/services">Services</a>
                  <a href="/products">Products</a>
                  <a href="/product/custom-chatbot">Chatbot</a>
                  <a href="/product/ocr-solution">OCR</a>
                </div>
              </div>
              <div class="col-md-4 footer__details">
                <div  class="footer__links_subs">
                <h2>Subscribe for more info</h2>
                <input type="email" class="footer__email__input" id="subscribe_email" />
                <button id="subs_button" class="btn btn-responsive tcs-primary-btn d-inline-block tcs-section-click">Subscribe</button>
                <span style="margin-top: 15px;margin-left:15px;" id="response"></span>
               </div>
              </div>
              <span class="footer__bottom-line"></span>
              <div class="footer__bottom">
                <div></div>
                <div class="footer__bottom__icons">
                  <span class="center"><img height="15px" width="15px" src="/img/icons/facebook.svg" /></span>
                  <span class="cta-btn btn-circle"><img height="15px" width="15px" src="/img/icons/instagram.svg" /></span>
                  <span><img  height="15px" width="15px" src="/img/icons/twitter.svg" /></span>
                  <span><img height="15px" width="15px" src="/img/icons/linkedin.svg" /></span>
                </div>
                <span class="footer__bottom__copyright">Copyright @ Jkinda All right reserved</span>
              </div>
            </div>
          </footer>
          <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
          <script src="{{ asset('js/custom.js') }}"></script>

          <!-- <script src="{{ asset('js/carousel.js') }}"> -->
          <!-- </script> -->
          <!-- <script>
            $( document ).ready(function() {
              $("#header-carousel").hover(function(){$(".btn-carousel").show();},function(){$(".btn-carousel").hide();})
              // $(".btn-carousel").on('click',function(){
              //   var id = $(this).attr('id');
              //   var nav;
              //   if(id=="previous") {
              //     nav = $("img.active").prev('img');
              //     if(nav.length == 0) nav = $("img").last();
              //   } else if(id=="next") {
              //     nav = $("img.active").next('img');
              //     if(nav.length == 0) nav = $("img").first();
              //   }
              //   $("img.active").hide();
              //   $("img.active").removeClass("active");
              //   nav.addClass("active");
              //   nav.fadeIn(1000);
              // });
              setInterval(function() {
                var nav;
                nav = $(".header__image.active").next('.header__image');
                if(nav.length == 0) nav = $(".header__image").first();
                $(".header__image.active").removeClass("active");
                nav.addClass("active");
                  }, 4000);
            });
          </script> -->
          @yield('custom_js')
    </body>
</html>
