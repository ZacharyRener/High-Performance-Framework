@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.subpage.excerpt-content')
    @include('partials.subpage.sidebar') 
@endsection