@extends('layout')
@section('section')
@include('components.header-image')
<section class="service">
         <div class="service__desc">
            <h1>{{$data['main_heading']}}</h1>
            <p>{{$data['main_description']}}</p>
         </div>

         <div class="service__work">
            <h1>Our Capabilities: Empowering Your Vision</h1>
            <div class="services-container">
    <div class="container-fluid">
        <div class="row">
            @foreach($capabilities as $caps)
            <div class="col-xxl-3 col-lg-4 col-md-6">
    <div class="whats_container">
    <div class=" whatsNew_card whatsNew_card-service whatsNew_orange h-100 card">
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
         <div class="service__apply">
            <h1>Implementing Technology Solutions for Projects</h1>
            @include('components.works')
        </div>
         </div>
<!-- "Utilize object detection within floor plans to seamlessly capture and categorize data for streamlined pipeline integration -->
         <div class="service__insights">
            <h1>Insights</h1>
            <div class="container">
            <div class="service__insights__items row">
                <div class="service__insights__items__item col-md-3">
                    <img src="./img/logo-green-1x.png"/>
                    <h3>Company Name</h3>
                    <span>uspendisse potenti. Fusce vel hendrerit felis. Praesent nibh justo, vehicula sed ex sit amet, auctor ultricies sem. Nunc non fringilla mi</span>
                </div>
                <div class="service__insights__items__item col-md-3">
                    <img src="./img/logo-green-1x.png"/>
                    <h3>Company Name</h3>
                    <span>uspendisse potenti. Fusce vel hendrerit felis. Praesent nibh justo, vehicula sed ex sit amet, auctor ultricies sem. Nunc non fringilla mi</span>
                </div>
                <div class="service__insights__items__item col-md-3">
                    <img src="./img/logo-green-1x.png"/>
                    <h3>Company Name</h3>
                    <span>uspendisse potenti. Fusce vel hendrerit felis. Praesent nibh justo, vehicula sed ex sit amet, auctor ultricies sem. Nunc non fringilla mi</span>
                </div>
                <div class="service__insights__items__item col-md-3">
                    <img src="./img/logo-green-1x.png"/>
                    <h3>Company Name</h3>
                    <span>uspendisse potenti. Fusce vel hendrerit felis. Praesent nibh justo, vehicula sed ex sit amet, auctor ultricies sem. Nunc non fringilla mi</span>
                </div>
            </div>
            </div>
         </div>
        </section>
        <section class="subs">
            <div class="subs__container">
                <h1>What can we help you with?</h1>
                <div class="subs__container-btns">
                    <button class="subs__container-btns-contact">Work with us</button>
                    <button class="subs__container-btns-job">Apply for job</button>
                </div>
            </div>
        </section>

@endsection
