@extends('layouts.app')

@section('header')
    @include('partials.subpage.header-image')
@endsection

@section('content')
    @include('partials.single.project')
    @include('partials.subpage.sidebar')
@endsection