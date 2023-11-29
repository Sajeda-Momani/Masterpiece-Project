@extends('Layout.master')

@section('title', 'Home')

@section('header_title', 'Home')

@section('content')


    <!-- Hero/Intro Slider Start -->
    @include('Pages.Home.Hero')
    <!-- Hero/Intro Slider End -->

    <!-- Categories Start -->
    @include('Pages.Home.Categories')
    <!-- Categories End -->

    <!-- Product Area Start -->
    @include('Pages.Home.Product')
    <!-- Product Area End -->

    <!-- Feature Area Start -->
    @include('Pages.Home.Feature')
    <!-- Feature Area End -->

    <!-- Packages Area Start -->
    @include('Pages.Home.Packages')
    <!-- Packages Area End -->

    <!-- Brands Area Start -->
    @include('Pages.Home.Brands')
    <!-- Brands Area End -->

   


@endsection
