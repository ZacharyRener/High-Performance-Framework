@php /* Template Name: Library Item */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @php
    $terms = get_field('type_of_library');
    @endphp
   @component('partials.subpage.library-item')
        @slot('library_type')
            {{ $type_of_library->slug }}
        @endslot
    @endcomponent
    @include('partials.subpage.sidebar')    
@endsection