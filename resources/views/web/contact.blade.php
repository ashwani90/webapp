@extends('layout')
@section('custom_css')
@endsection
@section('section')
@include('components.header-image')
<section class="service" style="margin-top: 20px;">
@include('components.service_intro')
<div class="contact-container">
<h1>Contact Us</h1>
</div>

@include('components.contact-us')
        </section>
        @include('components.get_to_know_form')
        @include('components.newsletter')
        @endsection
