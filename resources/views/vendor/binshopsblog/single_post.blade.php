@extends('layout')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/single-blog.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.min.css') }}" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism-okaidia.min.css"/>
@endsection
@section('section')
@include('components.header-image-blog')
@if(config("binshopsblog.reading_progress_bar"))
        <div id="scrollbar">
            <div id="scrollbar-bg"></div>
        </div>
    @endif

<section class="blog-right-side-bar">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="row">
                            <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a>{{$post->post->posted_at->diffForHumans()}}</a></li>
                                    <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a>{{$post->post->author->name}}</a></li>
                                </ul>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{$post->title}}</h5>
                                <!-- start vimeo video -->
                                <div class="blog-post-content margin-4-half-rem-bottom">
                                    <div class="fit-videos">
                                        <!-- <iframe src="https://player.vimeo.com/video/176916362?title=0&byline=0&portrait=0&autoplay=true&muted=1" width="100%" height="400" allowfullscreen></iframe> -->
                                    </div>
                                </div>
                                <!-- end vimeo video -->
                                {!! $post->post_body_output() !!}

                            </div>
                            <div class="col-12 d-flex flex-wrap align-items-center padding-15px-tb mx-auto margin-20px-bottom wow animate__fadeIn">
                                <div class="col-12 col-md-9 text-center text-md-start sm-margin-10px-bottom px-0">
                                    <div class="tag-cloud">
                                    @foreach($categories as $category)
                                        <a href="/en/blog/?category={{$category->categoryTranslations[0]->category_name}}">{{$category->categoryTranslations[0]->category_name}}</a>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-12 col-md-3 text-center text-md-end px-0">
                                    <a class="likes-count text-uppercase text-extra-dark-gray font-weight-500"><i class="far fa-heart"></i><span>{{count($comments)}} comments</span></a>
                                </div>
                            </div>
                            <!-- <div class="col-12 mx-auto margin-50px-bottom md-margin-30px-bottom wow animate__fadeIn">
                                <div class="d-block d-md-flex box-shadow-small align-items-center border-radius-5px padding-4-rem-all">
                                    <div class="w-130px text-center margin-60px-right sm-margin-auto-lr">
                                        <img src="https://via.placeholder.com/125x125" class="rounded-circle w-110px" alt=""/>
                                        <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">{{$post->post->author->name}}</a>
                                        <span class="text-medium d-block line-height-18px sm-margin-15px-bottom">Co-founder</span>
                                    </div>
                                    <div class="w-75 sm-w-100 last-paragraph-no-margin text-center text-md-start">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <a href="blog-grid.html" class="btn btn-link btn-large text-extra-dark-gray margin-20px-top">All author posts</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-12 text-center elements-social social-icon-style-09 mx-auto">
                                <ul class="medium-icon">
                                    <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fab fa-behance"></i><span></span></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- start sidebar -->
                    <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                        <!-- <div class="d-inline-block w-100 margin-5-rem-bottom">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                            <form id="search-form" role="search" method="get" action="search-result.html">
                                <div class="position-relative">
                                    <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off" />
                                    <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <!-- <div class="text-extra-dark-gray border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                            <a href="about-me.html"><img src="https://via.placeholder.com/125x125" alt="" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto"/></a>
                            <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Colene Landin</a>
                            <span class="text-medium d-block line-height-18px margin-20px-bottom">Co-founder</span>
                            <p>Lorem ipsum is simply dummy text of the printing and industry lorem ipsum has been standard.</p>
                            <div class="social-icon-style-02 text-center">
                                <ul class="extra-small-icon">
                                    <li class="mx-0"><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                    <li class="mx-0"><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                                    <li class="mx-0"><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                    <li class="mx-0"><a class="instagram" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categories</span>
                            <ul class="list-style-07 list-unstyled">
                            @foreach($categories as $category)
                                <li><a href="/en/blog/?category={{$category->categoryTranslations[0]->category_name}}">{{$category->categoryTranslations[0]->category_name}}</a><span class="item-qty"></span></li>
                            @endforeach

                            </ul>
                        </div>
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                            <ul class="latest-post-sidebar position-relative">
                                @foreach ($recent_posts as $post)
                                <li class="d-flex wow animate__fadeIn" data-wow-delay="0.2s">
                                    <figure class="flex-shrink-0">
                                        <a href="{{$post->url($locale, $routeWithoutLocale)}}"><img class="border-radius-3px" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$post->image_large }}" alt=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1">
                                        <a href="{{$post->url($locale, $routeWithoutLocale)}}" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">{{$post->title}}</a>
                                        <span class="text-medium d-block line-height-22px">{{$post->post->author->name}} | {{date('d M Y ', strtotime($post->post->posted_at))}}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Tags cloud</span>
                            <div class="tag-cloud">
                                <!-- TODO:: All tags listed here maybe -->
                                <a href="/en/blog/?category=Python">Python</a>
                                <a href="/en/blog/?category=Javascript">Javascript</a>
                                <a href="/en/blog/?category=Pytorch">Pytorch</a>
                            </div>
                        </div>

                    </aside>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
         @if(count($comments))
        <section class="comm">
            <div class="container">
                <div class="row justify-content-center">

                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto wow animate__fadeIn">
                    <h2 class='text-center mb-4' id='binshopsblogcomments'>Comments</h2>
                    <ul class="blog-comment">
                        @foreach($comments as $comment)
                            <li>
                                <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
                                    <div class="w-75px sm-w-50px sm-margin-10px-bottom">
                                        <img src="https://via.placeholder.com/125x125" class="rounded-circle w-95 sm-w-100" alt=""/>
                                    </div>
                                    <div class="w-100 padding-25px-left last-paragraph-no-margin sm-no-padding-left">
                                        <a href="#" class="text-extra-dark-gray text-fast-blue-hover alt-font font-weight-500 text-medium">{{$comment->author()}}</a>
                                        <div class="text-medium text-medium-gray margin-15px-bottom">{{$comment->created_at->diffForHumans()}}</div>
                                        <p class="w-85">{!! nl2br(e($comment->comment))!!}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- end section -->
        <!-- start section -->
        <section id="comments" class="pt-0">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 margin-4-rem-bottom wow animate__fadeIn">
                        <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-5px-bottom">Write a comment</h5>
                        <div class="margin-5px-bottom">Your email address will not be published. Required fields are marked <span class="text-radical-red">*</span></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 wow animate__fadeIn">
                        <form action="{{route("binshopsblog.comments.add_new_comment",[app('request')->get('locale'),$post->slug])}}" method="post">
                        {{ csrf_field() }}
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <label class="margin-15px-bottom" for="author-name">Your name <span class="text-radical-red">*</span></label>
                                    <input id="author_name" class="medium-input border-radius-4px bg-white margin-30px-bottom required" type="text" name="author_name" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <label class="margin-15px-bottom" for="author-email">Your email address <span class="text-radical-red">*</span></label>
                                    <input id="author_email" class="medium-input border-radius-4px bg-white margin-30px-bottom required" type="email" name="author_email" placeholder="Enter your email">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="margin-15px-bottom">Your comment</div>
                                    <textarea class="medium-textarea border-radius-4px bg-white h-120px margin-2-half-rem-bottom" rows="6" name="comment" placeholder="Enter your comment"></textarea>
                                </div>
                                @if($captcha)
                                    {{--Captcha is enabled. Load the type class, and then include the view as defined in the captcha class --}}
                                    @include($captcha->view())
                                @endif
                                <div class="col-12 sm-margin-20px-bottom">
                                    <input type="hidden" name="redirect" value="">
                                    <input class="btn btn-medium btn-dark-gray mb-0 btn-round-edge-small submit" type="submit" name="submit" value="Post Comment">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection



@section('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/components/prism-markup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js"></script>

<script>

 (function(){

  document.addEventListener('DOMContentLoaded', function(event) {

    var list = document.querySelectorAll('.markup-snippet');

    [].forEach.call(list, function(el) {
      var snippet = el.innerHTML.replace(/</g,'&lt;');
          snippet = snippet.replace(/ /g,'&nbsp;');
      var code = '<pre class="language-markup"><code class="language-markup">'+snippet+'</code></pre>';
      el.insertAdjacentHTML('afterend',code);
    });

    var list = document.querySelectorAll('pre');

    [].forEach.call(list, function(el) {
        el.classList.remove('language-markup');
      el.classList.add('language-markup');
    });

    // if your page has prism.js you get syntax highlighting
    if(window.Prism){
      Prism.highlightAll(false);
    }

  });

})();

    </script>
@endsection
