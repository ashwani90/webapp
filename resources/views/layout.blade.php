<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/style.css') }}">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Natours | Exciting tours for adventurous people</title>
    </head>
    <body>

        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="/" class="navigation__link">Home</a></li>
                    <li class="navigation__item"><a href="/products" class="navigation__link">Products</a></li>
                    <li class="navigation__item"><a href="/services" class="navigation__link">Services</a></li>
                    <li class="navigation__item"><a href="/product" class="navigation__link">Product</a></li>
                    <li class="navigation__item"><a href="/philosophy" class="navigation__link">Philisophy</a></li>
                    <li class="navigation__item"><a href="/service" class="navigation__link">Service</a></li>
                </ul>
            </nav>
        </div>

        <header class="header" id="header-carousel">
            <div class="header__logo-box">
            <img src="{{ asset('img/jkinda_logo.png') }}"  alt="Logo" class="header__logo">
            </div>
            <div class="header__image active">
              <img src="{{ asset('img/images/ai_generated.png') }}" height="100%" width="100%"/>
            <div class="header__text-box">

                <h1 class="heading-primary">
                <span class="heading-primary--main">Transform<span class="heading-primary--main-sub"> with AI</span></span>
                </h1>

                <a href="#section-tours" class="btn btn--white btn--animated">Learn More</a>
            </div>
          </div>
          <div class="header__image">
            <img src="{{ asset('img/images/ai_generated.jpg') }}"  height="100%" width="100%"/>
            <div class="header__text-box">
              <h1 class="heading-primary">
              <span class="heading-primary--main">Upgrade<span class="heading-primary--main-sub"> Software</span></span>
              </h1>

              <a href="#section-tours" class="btn btn--white btn--animated">Learn More</a>
          </div>
        </div>
        <div class="header__image">
          <img src="{{ asset('img/images/ai_generated1.jpg') }}"  height="100%" width="100%"/>
          <div class="header__text-box">

            <h1 class="heading-primary">
            <span class="heading-primary--main">Optimize<span class="heading-primary--main-sub"> Performance</span></span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Learn More</a>
        </div>
      </div>
      <div class="header__image">
        <img src="{{ asset('img/images/ai_generated2.jpg') }}"  height="100%" width="100%"/>
        <div class="header__text-box">
          <h1 class="heading-primary">
          <span class="heading-primary--main">Custom <span class="heading-primary--main-sub">Development</span></span>
          </h1>

          <a href="#section-tours" class="btn btn--white btn--animated">Learn More</a>
      </div>
    </div>
    <span class="progress-head"></span>

        </header>
        @yield('section')

          <footer class="footer">
            <div class="row footer__content">
              <div class="col-md-3 footer__details">
                <div class="footer__company">
                  <h2>Logo</h2>
                  <span>Title</span>
                </div>
                <div class="footer__about">
                  <h2>About Us</h2>
                  <span>Well something about us</span>
                </div>
                <div class="footer__contact">
                  <h2>Contact Us</h2>
                  <span>+91 9719820967</span>
                  <span>jkinda@gmail.com</span>
                </div>
              </div>
              <div class="col-md-3 footer__details">
                <div  class="footer__links_about">
                  <h2>Information</h2>
                  <span>About Us</span>
                  <span>More Search</span>
                  <span>Blog</span>
                  <span>Testimonials</span>
                </div>
              </div>
              <div class="col-md-2 footer__details">
                <div  class="footer__links_help">
                  <h2>Helpful Links</h2>
                  <span>Services</span>
                  <span>Support</span>
                  <span>Products</span>
                  <span>Policy</span>
                  <span>Philosophy</span>
                </div>
              </div>
              <div class="col-md-4 footer__details">
                <div  class="footer__links_subs">
                <h2>Subscribe for more info</h2>
                <input type="email" class="footer__email__input" />
                <button class="footer_email_btn">Subscribe</button>
               </div>
              </div>
              <span class="footer__bottom-line"></span>
              <div class="footer__bottom">
                <div></div>
                <div class="footer__bottom__icons">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <span class="footer__bottom__copyright">Copyright @ Jkinda All right reserved</span>
              </div>
            </div>
          </footer>
          <script src="{{ mix('js/jquery.js') }}">
          </script>
          <script>
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
          </script>
    </body>
</html>
