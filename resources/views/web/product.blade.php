@extends('layout')
@section('section')
@include('components.header-image')
<section class="product">
          <div class="container-fluid product_desc_container">
            <div class="row">
                <div class="col-md-6 product__desc">
                    <h1>{{$data['intro_head']}}</h1>
                    <span class="product__desc-s">{{$data['intro_desc']}}</span>
                    <div class="product__get__started">
                        <span>Lets get started</span>
                        <div class="row">
                        <span style="margin-top: 20px; margin-bottom: -40px; font-size: 1.4rem;" id="responseSt"></span>
                        </div>
                        <div class="container-fluid row loader-outer" style="margin-top: 30px;">
                            <div class="col-12 col-xl-8">

                                <div class="form-element form-element-error">
                                     <input autocomplete="off" id="emailSignupId" type="text" maxlength="250" name="emailId" class="form-control email-check position-relative email-signup-input-field msg-tooltip" placeholder="Get Started" aria-describedby="inputEmailSignUpError"> <span class="email-signup-mail-icon position-absolute" title="Email"><span class="sr-only">Email</span></span>
                                </div>

                            </div>

                            <div class="col-12 col-xl-4 order-3 order-lg-3 order-xl-1 email-button-wrapper loader-hide-button">
                                <button id="get_started" type="button" class="btn btn-responsive tcs-primary-btn d-inline-block tcs-section-click">Get Started</button>
                            </div>

                        </div>
                        <!-- <div class="product__get__started-btns">
                            <input type="email" placeholder="Get Demo"/>
                            <button>Get Started</button>
                        </div> -->
                    </div>

                </div>
                <div class="col-md-6  ">
                    <div class="product__show">
                        <img src="{{$data['intro_image']}}" />
                    </div>

                </div>
            </div>
            <div class="row features-container">
            <div class="product__features">
                <div class="feature_features_box_wrapper__B4aMP">
                    <div class="justify-content-center row">
                        @foreach ($data['features'] as $feature)
                            <div class="col-xl-3 col-lg-4 col-md-6 card">
                                <div class="feature_features_box__zoDeV">
                                    <div class="feature_features_box_icon_title__1ZXm5">
                                        <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="{{$feature['image']}}" style="color: transparent;">
                                        <h4>{{$feature['head']}}</h4>
                                    </div>
                                    <p class="font-lg-22 lh-lg-32">{{$feature['desc']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
          </div>
          <div class="product__head">
                <h1>Join us on this journey</h1>
            </div>
            @include('components.get_to_know')
        </section>
        <section class="subs">
            <div class="subs__container">
                <h1>What can we help you with</h1>
                <div class="subs__container-btns">
                <a href="/contact" class="subs__container-btns-contact">Schedule Demo</a>
                </div>
            </div>
        </section>

          @endsection
