var G = !1;
    let V, W, H = "", j = 5, Z = 0, Q = 0, J = 1, X = !1;
    function ee(e) {
        const t = $(".home-banner-slider.swiper-slide-active .home-banner-progress-bar");
        clearInterval(V);
        let a = parseInt($(".banner-slide-duration").val());
        if (V = setInterval((function() {
            J >= 100 ? (J = 1,
            clearInterval(V),
            $(".swiper-button-next-1").click()) : (J++,
            t.css("width", J + "%"))
        }
        ), 10 * a + 5),
        e)
            clearInterval(V),
            J = 0,

            t.css("width", "5%");

        else {}
    }
    function te() {
        clearInterval(V)
    }
    let ae = {
        bannerSwiper: "",
        imageZoomOut: function() {
            $(".home-banner-carousel .home-banner-slider").each((function() {
                $(this).hasClass("swiper-slide-active") ? $(this).find(".img-container img").addClass("zoom-out") : $(this).find(".img-container img").removeClass("zoom-out")
            }
            ))
        },
        init: function() {
            let e = this;
            Q = parseInt($(".banner-slide-duration").val()),
            $(".gradient-halo").css("transition-duration", Q + "s"),
            Z = Q + 1,
            setTimeout((function() {
                e.bannerSwiper = new Swiper(".mySwiper",{
                    grabCursor: !1,
                    loop: true,
                    autoplay: false,
                    speed: 1500,
                    centeredSlides: true,
                    slidesPerView: 1.1,
                    spaceBetween: 140,
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 0,
                        modifier: 1,
                        slideShadows: !1
                    },
                    pagination: {
                        el: ".swiper-pagination"
                    },
                    navigation: {
                        nextEl: ".swiper-button-next-1",
                        prevEl: ".swiper-button-prev-2"
                    },
                    on: {
                        init: function() {
                            e.timerCounter(),
                            ee()
                        },
                        slideChangeTransitionStart: function() {
                            //G && $(".home-banner-play-pause").hasClass("playing") && !$(".home-banner").hasClass("swiper-stop") && (ae.tickerAnimationReset(),
                            //ae.imageZoomOut()),
                            $(".home-banner-slider.swiper-slide-active .home-banner-progress-bar").css("width", "0%")
                        },
                        slideChangeTransitionEnd: function() {
                            $(".home-banner-slider.swiper-slide-active .home-banner-progress-bar").css("width", "0%")
                            //G && $(".home-banner-play-pause").hasClass("playing") && !$(".home-banner").hasClass("swiper-stop") && e.timerCounter()
                        },
                        slideChange: function() {
                            X = !0,
                            ee(X),
                            W = parseInt($(".banner-slide-duration").val()),
                            ae.tickerAnimationReset(W),
                            X = !1,
                            ee(),
                            setTimeout((function() {
                                X = !0,
                                ee(X),
                                X = !1,
                                ee()
                            }
                            ), 400)
                            //$(".heroCarousal-slide-updates").text($(".home-banner-slider").eq(e.bannerSwiper.snapIndex).attr("aria-label"))
                        }
                    }
                })
            }
            ), 0)
        },
        tickerAnimationReset: function(e) {
            e > 0 ? (Q = e,
            Z = Q) : (Z = Q,
            j = 0),
            cancelAnimationFrame(H)
            /*$(".home-banner .homer-banner-timer").css({
                opacity: 0
            }).removeClass("animate-start")*/
        },
        tickerAnimation: function(e) {
           // if ((!j || e - j >= 1e3) && $(".home-banner-play-pause").hasClass("playing")) {
                j = e,
                Z--,
                G = !0,
                95 == parseInt($(".home-banner-slider.swiper-slide-active .home-banner-progress-bar").css("width")) / parseInt($(".img-container").css("width")) * 100 ? (ae.bannerSwiper.slideNext(),
                setTimeout((function() {
                    X = !0,
                    ee(X),
                    X = !1,
                    ee()
                }
                ), 400)) : $(".home-banner-counter").html(Z)
           // }
            H = window.requestAnimationFrame(ae.tickerAnimation)
        },
        timerCounter: function() {
            ae.tickerAnimationReset()
            /*setTimeout((function() {
                $(".home-banner .homer-banner-timer").css({
                    opacity: 1
                }).addClass("animate-start"),
                H = window.requestAnimationFrame(ae.tickerAnimation)
            }
            ), 50)*/
        },
        handleDMImage: function() {
            setTimeout((function() {
                let e, t = {};
                $(".swiper-wrapper .swiper-slide .home-banner-box .non-svg-image").length && $(".swiper-wrapper .swiper-slide .home-banner-box").find("img").each((function() {
                    e = $(this).attr("src"),
                    "h" == e.charAt(0) && (t[$(this).attr("data-src")] = $(this).attr("src"))
                }
                )),
                $(".swiper-wrapper .swiper-slide .home-banner-box .non-svg-image").find("img").each((function() {
                    t.hasOwnProperty($(this).attr("data-src")) && $(this).attr("src", t[$(this).attr("data-src")])
                }
                ));
                let a = {};
                $.each($(".swiper-slide div[data-asset-type='videoavs']"), (function() {
                    $(this).text().length && (a[$(this).attr("id")] = $(this).html())
                }
                )),
                $.each($(".swiper-slide div[data-asset-type='videoavs']"), (function() {
                    a.hasOwnProperty($(this).attr("id")) && $(this).addClass("s7dm-dynamic-media s7responsiveViewer s7videoviewer s7mouseinput s7size_small s7device_portrait position-relative")
                }
                ))
            }
            ), 3e3)
        },
    };
    $(document).ready((function() {
        ae.init(),
        ae.handleDMImage(),
        $(window).on("load", (function() {
            setTimeout((function() {
                // ae.setDmControlID(),
                $(".home-banner-carousel .home-banner-slider.swiper-slide-active .img-container img").addClass("zoom-out"),
                $(".homeHeroCarousel .swiper-wrapper").removeAttr("aria-live")
            }
            ), 500)
        }
        )),
        $(".home-banner-button-prev").on("blur", (function(e) {
            let t = $(this).parents(".homeHeroCarousel").find(".home-banner-button-next")
              , a = $(this).parents(".homeHeroCarousel").find(".swiper-wrapper")
              , n = $(this).parents(".homeHeroCarousel").find(".slide-updates");
            setTimeout((function() {
                $(document.activeElement)[0] == t[0] ? (console.log("inside"),
                a.attr("aria-live", "polite"),
                n.attr("aria-live", "polite")) : (a.removeAttr("aria-live"),
                n.removeAttr("aria-live"))
            }
            ), 0)
        }
        ))
    }));
