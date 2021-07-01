@php /* Template Name: Library */ @endphp

@extends('layouts.app')

@section('content')
@include('partials.subpage.header-image')
<div class="main-container">
    <section class="about-body-section slide-up">
        <div class="container">
            <div class='row'>
                @include('partials.subpage.insights')
                @include('partials.subpage.sidebar')
            </div>
        </div>
    </section>
</div>
@endsection