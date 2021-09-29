@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    {{-- 404 --}}
    @if(is_404())
        <div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
            <h1>404</h1>
            <a href='/'>Return home</a>
        </div>
        @include('partials.subpage.sidebar')

    {{-- Archives--}}
    @elseif(is_post_type_archive('project'))
        @include('partials.subpage.projects') 

    @elseif(is_post_type_archive('news'))
        @include('partials.subpage.news-events-dropdown')
        @include('partials.subpage.sidebar') 

    @elseif(is_post_type_archive('leadership'))
        @include('partials.subpage.leadership')
        @include('partials.subpage.sidebar')   

    @elseif(is_post_type_archive())
        404: Archive Not Found
    
    {{-- Default --}}
    @else
        @include('partials.subpage.content')
        @include('partials.subpage.sidebar')  
    @endif

@endsection