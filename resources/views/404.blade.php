@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @if($uri == "/insights/guides/")
        @component('partials.subpage.library-item')
            @slot('library_type')
                guide
            @endslot
        @endcomponent
        @include('partials.subpage.sidebar')  
    @else
        <div class="col-md-8 col-md-offset-1 col-sm-8 body-txt pull-right about-body">
            <h1>404</h1>
            <a href='/'>Return home</a>
        </div>
        @include('partials.subpage.sidebar')  
    @endif
@endsection