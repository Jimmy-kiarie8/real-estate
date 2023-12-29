@extends('pages.layouts.app')
@section('content')
    <div class="entry-content">

        {{-- Slider --}}
        @include('pages.include.slider')
        {{-- Slider --}}

        <div class="container">
        {{-- Shipping --}}
        @include('pages.include.shipping')
        {{-- Shipping --}}
        <hr>
        {{-- Categories --}}
        @include('pages.include.categories')
        {{-- Categories --}}

        {{-- Weekly sales --}}
        @include('pages.include.offers')
        {{-- Weekly sales --}}

        {{-- Top picks --}}
        @include('pages.include.top-brands')
        {{-- Top picks --}}

        {{-- Product Collections --}}
        @include('pages.include.product-collections')
        {{-- Product Collections --}}

        {{-- New Arrivals --}}
        @include('pages.include.new-arrivals')
        {{-- New Arrivals --}}

        {{-- Rules --}}
        @include('pages.include.rules')
        {{-- Rules --}}
    </div>
        {{-- @include('pages.include.blogs') --}}
        {{-- @include('pages.include.terms') --}}
    </div>
@endsection
