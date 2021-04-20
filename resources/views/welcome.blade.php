@extends('layouts.app')

@section('content')
    <div class="header-section">
        @include('sections.header')
    </div>
    @include('sections.features')
    @include('sections.our-services')
    @include('sections.our-works')
    @include('sections.about-us')
    @include('sections.reviews')
    @include('sections.form')
    @include('sections.blog')
    @include('sections.clients')
@endsection