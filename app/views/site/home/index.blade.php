@extends('layouts.site')

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/slide_show.less') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/xoverlay/xoverlay.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/hoverEffect/component.css') }}">
@endsection

    @section("content")

        <div class="wrapper">
            <header>
                @include('site.elements.header')
            </header>

            <div class="slide_show">
                @include('site.elements.slide_show')
            </div>

           <div class="content">
                @yield('content_site')
            </div>
           <footer>
                @include('site.elements.footer')
           </footer>

        </div>

    @endsection
@section('script')
    @parent
        <script type="text/javascript" src="{{ asset('assets/js/plugins/owl.carousel/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/site/home/main.js') }}"></script>
@endsection




