@extends('layout')
@section('section')
@include('components.header-image')
<section class="service" style="margin-top: 20px;">
@include('components.service_intro')
@include('components.services')

        </section>
        @include('components.newsletter')
        @endsection
