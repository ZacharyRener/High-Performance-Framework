@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.single.leadership')
    @include('partials.subpage.sidebar')
@endsection