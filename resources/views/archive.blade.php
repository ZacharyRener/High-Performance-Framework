@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')

    @if(is_post_type_archive('project'))
        @include('partials.subpage.projects') 
    @elseif(is_post_type_archive('news'))
        @include('partials.subpage.news-events-dropdown')
        @include('partials.subpage.sidebar') 
    @elseif(is_post_type_archive('leadership'))
        @include('partials.subpage.leadership')
        @include('partials.subpage.sidebar')    
    @else
            404: Archive Not Found
    @endif

@endsection