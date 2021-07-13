@php /* Template Name: Whitepapers */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
   @component('partials.subpage.library-item')
        @slot('library_type')
            whitepapers
        @endslot
    @endcomponent
    @include('partials.subpage.sidebar')    
@endsection