@php /* Template Name: Home Default Template */ @endphp

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @include('partials.home.mainstage.homepage-slider')
        @include('partials.home.quick-hit')
        @include('partials.home.pathways.pathways')
        @include('partials.home.offers.offers')
        @include('partials.home.selected-clients')
        @include('partials.home.seo-copy')
    @endwhile
    @include('partials.home.mainstage.owl-carousel-logic')
@endsection
