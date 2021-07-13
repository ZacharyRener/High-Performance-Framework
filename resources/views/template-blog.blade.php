@php /* Template Name: Blog */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.subpage.blog')
    @include('partials.subpage.sidebar')    
@endsection