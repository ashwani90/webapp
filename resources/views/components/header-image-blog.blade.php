<section class="head-section">
    @if (str_contains($data['headimage'], '.mp4'))
    <video autoplay muted>
        <source src="{{$data['headimage']}}" type="video/mp4">
        <!-- <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
    </video>
    @else
    <?=$post->image_tag("medium", false, ''); ?>
    @endif
    <div class="overlay"></div>
    <div class="image-content">
        <span class="title">{{ $data['head_image_title'] ?? 'What we do / Products' }}</span>
        <span class="divider"></span>
        <span class="primary-head">{{ $post->subtitle ?? 'Our Products' }}</span>
        <span class="secondary-head">{{ $post->title ?? 'Innovative Solutions, Enriching Experiences' }}</span>
    </div>
</section>
