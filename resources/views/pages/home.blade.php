@extends('layouts.app')

@section('content')
    @include('pages.HeroSection')
    @include('pages.categoriesSection')
    @include('pages.featured')
    @include('components.newsletter')
@endsection
