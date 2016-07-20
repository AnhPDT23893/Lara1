<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <title>@yield('title', 'layout_site')</title>

        @section('style_site')
            <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css') }}">
        @show

    </head>
    <body>

        @yield('content')

        @section('script')
            <script type="text/javascript" src="{{ asset('assets/others/less.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/others/jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/plugins/cookie.jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.form.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/site/home/carts.js') }}"></script>
        @show

    </body>
</html>