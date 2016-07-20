@extends('layouts.site')

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
@endsection

@section('content')
        <header>
            @include('site.elements.header')
        </header>
        @yield('user_content')
       <footer>
            @include('site.elements.footer')
       </footer>

    </div>

@endsection

@section('script')
    @parent
        <script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{Asset('assets/js/site/user/register.js')}}"></script>
@stop