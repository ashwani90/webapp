@extends('layout')
@section('custom_css')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
@endsection
@section('section')
@include('components.header-image')
@if (count($featured_posts) > 0)
<section class="service" style="margin-top: 20px;">
<h3 class="section-head-featured">Featured Stories </h3>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="insight-container">
                <img class="insight-big-image" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$featured_posts[0]->image_large }}" />
                <div class="insight-text-container">
                    <h2><a style="color: black;" href="{{$featured_posts[0]->url($locale, $routeWithoutLocale)}}" >{{$featured_posts[0]->title}}</a></h2>
                    <div class="subhead">
                        <span>{{$featured_posts[0]->post->author->name}} | {{date('d M Y ', strtotime($featured_posts[0]->post->posted_at))}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$featured_posts[1]->image_large }}"  />
                <div class="insight-text-container-right">
                    <h2><a style="color: black;" href="{{$featured_posts[0]->url($locale, $routeWithoutLocale)}}" >{{$featured_posts[1]->title}}</a></h2>
                    <div class="subhead">
                        <span>{{$featured_posts[1]->post->author->name}} | {{date('d M Y ', strtotime($featured_posts[1]->post->posted_at))}}</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$featured_posts[2]->image_large }}"  />
                <div class="insight-text-container-right">
                    <h2><a style="color: black;" href="{{$featured_posts[0]->url($locale, $routeWithoutLocale)}}" >{{$featured_posts[2]->title}}</a></h2>
                    <div class="subhead">
                        <span>{{$featured_posts[2]->post->author->name}} | {{date('d M Y ', strtotime($featured_posts[2]->post->posted_at))}}</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$featured_posts[3]->image_large }}"  />
                <div class="insight-text-container-right">
                    <h2><a style="color: black;" href="{{$featured_posts[0]->url($locale, $routeWithoutLocale)}}" >{{$featured_posts[3]->title}}</a></h2>
                    <div class="subhead">
                        <span>{{$featured_posts[3]->post->author->name}} | {{date('d M Y ', strtotime($featured_posts[3]->post->posted_at))}}</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="{{ request()->getSchemeAndHttpHost() . '/blog_images/'.$featured_posts[4]->image_large }}"  />
                <div class="insight-text-container-right">
                    <h2><a style="color: black;" href="{{$featured_posts[0]->url($locale, $routeWithoutLocale)}}" >{{$featured_posts[4]->title}}</a></h2>
                    <div class="subhead">
                        <span>{{$featured_posts[4]->post->author->name}} | {{date('d M Y ', strtotime($featured_posts[4]->post->posted_at))}}</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
        </div>
    </div>
</div>

        </section>
@endif
<section  class="service blog-container-section">

    <div class="row">
    @foreach($posts as $post)
    <div class="col-md-3 blog-item">
            <?=$post->image_tag("medium", true, ''); ?>
            <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
            <div class="blog-container-text">
                <span class="category-text">Javascript</span>
               <h2><a href="{{$post->url($locale, $routeWithoutLocale)}}" >{{$post->title}}</a></h2>
                <span class="subhead">
                {{$post->post->author->name}} | {{date('d M Y ', strtotime($post->post->posted_at))}}
                </span>
            </div>
        </div>
    @endforeach

    {{ $posts->links('vendor.pagination.default') }}
    </div>
</section>
@endsection

