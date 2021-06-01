@php /* Template Name: Whitepapers */ @endphp

@extends('layouts.app')

@include('partials.subpage.header-image')
<div class="main-container">
    <section class="about-body-section slide-up">
        <div class="container">
            <div class='row'>
                @component('partials.subpage.library-item')
                    @slot('library_type')
                        whitepapers
                    @endslot
                @endcomponent
                @include('partials.subpage.sidebar')
            </div>
        </div>
    </section>
</div>