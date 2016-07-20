@extends('site/home/index')

@section('title')
    Home
@endsection

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/banner.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/latest_products.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/featured_products.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/blog.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/best_seller.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/bottom_content.less') }}">
@endsection

    @section("content_site")

        @include('site.home.content.banner')
        @include('site.home.content.latest_products')
        @include('site.home.content.featured_products')
        @include('site.home.content.blog')
        @include('site.home.content.best_seller')
        @include('site.home.content.bottom_content')

    @endsection

@section('script')

    @parent
@endsection




