@php /* Template Name: Library Item */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.pages.modules.header-image')
@endsection

@section('content')
   @component('partials.pages.library-item')
        @slot('library_type')
            {{ $type_of_library->slug }}
        @endslot
    @endcomponent
    @include('partials.global.sidebar')    
@endsection