@extends('layout')
@section('section')
@include('components.header-image')
<section class="service">
    <div class="container">
<div class="service-intro-row row">
        <div class="col-md-6" style="text-align: justify;">
            <div class="service-text-container">
            <h1>{{$data['main_heading']}}</h1>
            <p>{{$data['main_description']}}</p>
            </div>
        </div>
        <div class="col-md-6 service-image-container">
        <img src="http://localhost:8000/img/images/business.jpg">
        </div>
    </div>
    <hr />
</div>


         <div class="service__work">
            <h1>Our Capabilities: Empowering Your Vision</h1>
            <div class="services-container">
    <div class="container-fluid">
        <div class="row">
            @foreach($capabilities as $caps)
            <div class="col-xxl-4 col-lg-4 col-md-6">
    <div class="whats_container">
    <div class=" whatsNew_card whatsNew_card_big whatsNew_card-service whatsNew_orange card">
        <div class="whatsNew_icon text-center mb-4">
            <img alt="" loading="lazy" width="95" height="95" decoding="async" data-nimg="1" srcset="{{$caps['image']}}" style="color: transparent;">
        </div>
        <h4 class="text-center mb-3 px-4">{{$caps['head']}}</h4>
        <p class="whatsNew_text_opaque__T996_ ">
        {{$caps['description']}}</p>
    </div>
</div>
</div>
            @endforeach

</div>

</div>
</div>

        </div>

         </div>
         <div class="service__apply text-head">
            <h1>Implementing Technology Solutions for Projects</h1>
            @include('components.works')
        </div>
         </div>
<!-- "Utilize object detection within floor plans to seamlessly capture and categorize data for streamlined pipeline integration -->
         <div class="service__insights">
            <h1 class="text-head">Insights</h1>
            <div class="container">
            <div class="service__insights__items row">
            <div class="blog__container row p-4">
                <div class="col-md-3 blog-item">
                <img src="{{ asset('/img/products/ai_news.jpeg') }}" height="40%" width="100%" />
                <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                <div class="blog-container-text">
                    <span class="category-text">Javascript</span>
                      <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                        <span class="subhead">
                        Ashwani | Dec 24 2023
                        </span>
                    </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('/img/products/ocr.jpeg') }}" height="40%" width="100%" />
                  <div class="blog-container-text">
                    <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('/img/products/predict.jpeg') }}" height="40%" width="100%" />
                  <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                  <div class="blog-container-text">
                      <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('/img/products/book.jpeg') }}" height="40%" width="100%" />
                  <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                  <div class="blog-container-text">
                      <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
              </div>
            </div>
            </div>
         </div>
        </section>
        <section class="subs">
            <div class="subs__container">
                <h1>What can we help you with?</h1>
                <div class="subs__container-btns">
                <a href="/contact" class="subs__container-btns-contact">Schedule Demo</a>
                </div>
            </div>
        </section>

@endsection
