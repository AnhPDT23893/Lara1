@extends('layouts.site')

@section('title')
    Search Product Name
@endsection

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/home/featured_products.less') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/xoverlay/xoverlay.css') }}">
{{--        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel/owl.carousel.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/hoverEffect/component.css') }}">
@endsection

    @section("content")

        <div class="wrapper">
            <header>
                @include('site.elements.header')
            </header>

           <div class="container">
                <div class="row product">
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-4 col-xs-4 item">
                            <div class="photo">
                                <div class="xoverlay x-simple">
                                    <img class="img-responsive" src="{{ asset($product->path) }}">
                                    <div class="xoverlay-box">
                                        <div class="xoverlay-data x-icon-left-right">
                                            <span class="x-circle x-white">
                                                 <a href="javascript:void(0);" class="add-to-cart">
                                                    <i class="fa fa-shopping-cart "></i>
                                                 </a>
                                            </span>
                                            <span></span>
                                            <span class="x-circle x-white " >
                                                 <a href="#" class="quick-view">
                                                    <i class="fa fa-eye eye"></i>
                                                 </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info clearfix">
                                <a href="#"><h4 class="">{{ $product->name_product }}</h4></a>
                                <div class="rate center-block">
                                    <img src="{{ asset('assets/images/icon/icon-star.png') }}">
                                </div>
                                <div class="price">
                                    <strong class="price-text-color">${{ $product->price }}</strong>
                                    <label class="old-price-text-color">${{ $product->special_price }}</label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <?php echo $products->links(); ?>
            </div>

           <footer>
                @include('site.elements.footer')
           </footer>

        </div>

    @endsection
@section('script')
    @parent
{{--        <script type="text/javascript" src="{{ asset('assets/js/plugins/owl.carousel/owl.carousel.js') }}"></script>--}}
        <script type="text/javascript" src="{{ asset('assets/js/site/home/main.js') }}"></script>
@endsection




