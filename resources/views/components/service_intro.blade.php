<div class="service-intro-container container">
    <div class="service-intro-row row">
        <div class="col-md-6">
            <div class="service-text-container">
                <h3>{{$data['service_intro_head'] ?? 'How People Benefit from AI. How AI Relies on People'}}</h3>
                <p>{{ $data['service_intro_desc'] }}</p>
            </div>
        </div>
        <div class="col-md-6 service-image-container">
            <img src='{{ $data["service_intro_image"] }}'>
        </div>
    </div>
    <hr />
</div>
