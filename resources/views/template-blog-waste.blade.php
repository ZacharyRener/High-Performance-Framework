@php /* Template Name: Blog - Waste */ @endphp

@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.subpage.blog')
    @include('partials.subpage.sidebar')    
@endsection