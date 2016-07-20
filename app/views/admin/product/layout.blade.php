@extends('admin.layout')

@section('title') Product Management @stop

@section('script')
    @parent
    <script src="{{ asset('assets/others/select2/select2.min.js') }}"></script>
@stop

@section('admin_content')

    @yield('admin_product_content')

@stop