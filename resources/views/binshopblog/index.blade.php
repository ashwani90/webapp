@extends('layout')
@section('custom_css')
<link rel="stylesheet" href="{{ mix('css/blog.css') }}" />
@endsection
@section('section')
@include('components.header-image')

<section class="service" style="margin-top: 20px;">
<h3 class="section-head-featured">Featured Stories </h3>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="insight-container">
                <img class="insight-big-image" src="./img/images/ai_generated.png" />
                <div class="insight-text-container">
                    <h2>OCR leading the way</h2>
                    <div class="subhead">
                        <span>Press Releases | 01 Feb 2024</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="./img/images/ai_generated.png" />
                <div class="insight-text-container-right">
                    <h2>OCR leading the way</h2>
                    <div class="subhead">
                        <span>Press Releases | 01 Feb 2024</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="./img/images/ai_generated.png" />
                <div class="insight-text-container-right">
                    <h2>OCR leading the way</h2>
                    <div class="subhead">
                        <span>Press Releases | 01 Feb 2024</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="./img/images/ai_generated.png" />
                <div class="insight-text-container-right">
                    <h2>OCR leading the way</h2>
                    <div class="subhead">
                        <span>Press Releases | 01 Feb 2024</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
            <div class="insight-container-right">
                <div class="insight-item">
                <img class="insight-small-image" src="./img/images/ai_generated.png" />
                <div class="insight-text-container-right">
                    <h2>OCR leading the way</h2>
                    <div class="subhead">
                        <span>Press Releases | 01 Feb 2024</span>
                    </div>
                </div>
                </div>

            </div>
            <hr/>
        </div>
    </div>
</div>

        </section>
<section  class="service blog-container-section">

    <h3 class="section-head-featured">Discover More </h3>
    @if($category_chain)
    <div class="tag-container">
        <ul>
            <li><b>TAGS</b></li>
            @forelse($category_chain as $cat)
            <li><a href="{{$cat->categoryTranslations[0]->url($locale)}}"> {{$cat->categoryTranslations[0]['category_name']}}</a></li>
            @empty @endforelse

        </ul>
    </div>
    @endif

    <div class="row">
    @forelse($posts as $post)
    <div class="col-md-3 blog-item">
            <img class="blog-image" src="./img/images/ai_generated.png" />
            <div class="blog-container-text">
                <span class="category-text">Javascript</span>
                <h2>Record Deal Wins and Robust Margins Mark Strong Finish to TCS’ FY24</h2>
                <span class="subhead">
                Press Releases | 01 Feb 2024
                </span>
            </div>
        </div>
    @endforelse

    </div>
</section>
@endsection

