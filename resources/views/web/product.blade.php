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
                        <div class="product__get__started-btns">
                            <input type="email" placeholder="Get Demo"/>
                            <button>Get Started</button>
                        </div>
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
                    <button class="subs__container-btns-contact">Work with us</button>
                    <button class="subs__container-btns-job">Apply for job</button>
                </div>
            </div>
        </section>

          @endsection
