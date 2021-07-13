@php /* Template Name: News & Events */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.subpage.news-events-dropdown')
    @include('partials.subpage.sidebar')   
@endsection