@extends('layouts.site')

@section('title')
    Category
    @stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/category/category.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/bottom_content.less') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/xoverlay/xoverlay.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel/owl.carousel.css') }}">
@endsection

    @section("content")

        <div class="wrapper">
            <header>
                @include('site.elements.header')
            </header>
            <div class="clearfix"></div>
            <div class="slide-show">
               <div class="show">
                   <img class="img-responsive" src="{{asset('assets/images/about/Layer170.png')}}"/>
                   <p class="container">
                       <a href="javascript:void(0);">CATEGORIES > WOMEN</a>
                   </p>
               </div>
           </div>
            <div class="content">
                <div class="container">
                    <div class="col-md-9 pull-right">
                        <div class="banner-content">
                            <img src="{{asset('assets/images/banner/banner-categories.png')}}">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @include('site.category.menu_bar')
                    @include('site.category.product_content')
                </div>
{{--                @include('site.home.content.bottom_content')--}}
            </div>

            <div class="clearfix"></div>
           <footer>
                @include('site.elements.footer')
           </footer>

        </div>

    @endsection
@section('script')
    @parent
        <script type="text/javascript" src="{{ asset('assets/js/plugins/owl.carousel/owl.carousel.js') }}"></script>
@endsection




