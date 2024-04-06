@extends('layout')
@section('section')
@include('components.header-image')
<section class="product">
          <div class="container-fluid product_desc_container">
            <div class="row">
                <div class="col-md-6 product__desc card">
                    <h1>Empowering Conversations, Revolutionizing Efficiency.</h1>
                    <span class="product__desc-s">Experience a transformative leap in communication efficiency with our advanced chatbot solutions. Seamlessly integrating cutting-edge technology, we usher in a new era of streamlined interactions. Enhance productivity, boost customer satisfaction, and stay ahead of the curve with our innovative chatbot solutions driving your business forward.</span>
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
                        <img src="./img/ai_for/chatbot-robot.jpg" />
                    </div>

                </div>
            </div>
            <div class="row features-container">
            <div class="product__features">
                <div class="feature_features_box_wrapper__B4aMP">
                    <div class="justify-content-center row">
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/document.svg" style="color: transparent;">
                                    <h4>Data-Driven Enhancement</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Elevate your chatbot experience by personalizing it with your unique data</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/shredder.svg" style="color: transparent;">
                                    <h4>Enhanced Chatbot Control</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Upgrade with our self-hosted server solutions for peak chatbot performance and full operational control.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/money.svg" style="color: transparent;">
                                    <h4>Exceptional Performance, Seamless Multitasking</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Experience exceptional performance and seamless multitasking capabilities.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/report.svg" style="color: transparent;">
                                    <h4>Insightful Automation</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Unlock personalized insights effortlessly with our chatbot-powered custom report generation</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/social.svg" style="color: transparent;">
                                    <h4>Unified Chat Connectivity</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Seamlessly integrates across diverse chat platforms for enhanced connectivity</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 card">
                            <div class="feature_features_box__zoDeV">
                                <div class="feature_features_box_icon_title__1ZXm5">
                                    <img alt="Cloud Infrastructure" loading="lazy" width="72" height="72" decoding="async" data-nimg="1" src="./img/svg/chats1.svg" style="color: transparent;">
                                    <h4>Centralized Conversations</h4>
                                </div>
                                <p class="font-lg-22 lh-lg-32">Manage all user interactions seamlessly from one centralized portal for streamlined communication excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
          <div class="product__head">
                <h1>Join us on this journey</h1>
            </div>
            @include('components.get_to_know')

        <div class="product__features">
            <div class="product__features-tabs">
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ul>
            </div>
            <div class="row product__new">
                <div class="col-md-6 product__new__text">
                    <h1>Text Idea</h1>
                    <span>Fusce nunc tortor, fermentum sit amet posuere non, dignissim ut lorem. Integer in pharetra leo, sed venenatis tellus. Etiam quis maximus lacus, eget condimentum elit. Duis sit amet lacinia tellus, vitae congue risus. Pellentesque a euismod est. Praesent ornare arcu id ante finibus, id molestie mauris vulputate. </span>
                    <button>Discover</button>
                </div>
                <div class="col-md-6 product__new__img">
                    <img src="./img/nat-1.jpg" />
                </div>
            </div>
        </div>
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
