@php /* Template Name: Blog */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.pages.modules.header-image')
@endsection

@section('content')
    @include('partials.pages.blog')
    @include('partials.global.sidebar')    
@endsection