@extends('layouts.app')

@section('header')
    @include('partials.pages.modules.header-image')
@endsection

@section('content')
    {{-- 404 --}}
    @if(is_404())
        <div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
            <h1>404</h1>
            <a href='/'>Return home</a>
        </div>
        @include('partials.global.sidebar')

    {{-- Archives--}}
    @elseif(is_post_type_archive('project'))
        @include('partials.pages.projects') 

    @elseif(is_post_type_archive('news'))
        @include('partials.pages.modules.news-events-dropdown')
        @include('partials.global.sidebar') 

    @elseif(is_post_type_archive('leadership'))
        @include('partials.pages.leadership')
        @include('partials.global.sidebar')   

    @elseif(is_post_type_archive())
        404: Archive Not Found
    
    {{-- Search --}}
    @elseif(is_search())
        @include('partials.pages.modules.excerpt-content')
        @include('partials.global.sidebar') 

    {{-- Leadership --}}
    @elseif(get_post_type() == "leadership")
        @include('partials.singles.leadership')
        @include('partials.global.sidebar')

    {{-- Library --}}
    @elseif(get_post_type() == "library")
        @include('partials.singles.library')
        @include('partials.global.sidebar')

    {{-- Post --}}
    @elseif(get_post_type() == "post")
        @include('partials.pages.modules.content')
        @include('partials.global.sidebar')  

    {{-- Post --}}
    @elseif(get_post_type() == "news")
        @include('partials.pages.modules.content')
        @include('partials.global.sidebar') 

    {{-- News --}}
    @elseif(get_post_type() == "project")
        @include('partials.singles.project')
        @include('partials.global.sidebar')

    {{-- Default --}}
    @else
        @include('partials.pages.modules.content')
        @include('partials.global.sidebar')  
    @endif

@endsection