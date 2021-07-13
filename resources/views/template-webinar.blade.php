@php /* Template Name: Webinar */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
   @component('partials.subpage.library-item')
        @slot('library_type')
            webinar
        @endslot
    @endcomponent
    @include('partials.subpage.sidebar')    
@endsection