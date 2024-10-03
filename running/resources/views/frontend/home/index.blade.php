@extends('frontend.layouts.master');
@section('content')
    @include('frontend.home.components.slider')

    @include('frontend.home.components.why-chose')

    @include('frontend.home.components.cart-popup')

    @include('frontend.home.components.menu-item')

    @include('frontend.home.components.team')

    @include('frontend.home.components.app-download')

    @include('frontend.home.components.testimonial')
@endsection
