   <div class="latest_products">
        <div class="container">
            <div class="title clearfix">
                <h3>LATEST PRODUCTS</h3>
                <div class="count">
                    <span class="col-md-4 col-sm-4 col-xs-4"></span>
                    <div class="col-md-1 col-sm-2 col-xs-3">[ {{$latests->count()}} ]</div>
                    <span class="col-md-4 col-sm-4 col-xs-4"></span>
                </div>
            </div>
            <div class="customNavigation">
                <a class="pull-left"><li class="btn fa fa-chevron-left prev-product"></li></a>
                <a class="pull-right"><li class="btn fa fa-chevron-right next-product"></li></a>
            </div>
            <div id="owl-product" class="owl-carousel owl-theme product row">
                @foreach($latests as $latest )
                    <div class="item">
                        <div class="photo">
                            <div class="xoverlay x-simple">
                                <img class="img-responsive avatar x-img-main" alt="a" src="{{asset( $latest->path)}}">
                                <div class="xoverlay-box">
                                    <div class="xoverlay-data x-icon-left-right">
                                        <span class="x-circle x-white">
                                            <a href="javscript:;" class="add2cart" data-id="{{ $latest->id }}" data-name="{{ $latest->name_product }}" data-price="{{ $latest->price }}" data-img="{{asset($latest->path)}}">
                                                <i class="fa fa-shopping-cart cart"></i>
                                            </a></span>
                                            <span></span>
                                        <span class="x-circle x-white"><a href="{{ URL::route('site.product.show', ['id' => $latest->id]) }}" ><i class="fa fa-eye eye"></i></a></span>
                                    </div>
                                 </div>
                            </div>
                            {{--<div class="sale-off">--}}
                                {{--<a href="#">SOID OUT</a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="info clearfix">
                            <a href="{{ URL::route('site.product.show', ['id' => $latest->id]) }}"><h4 class="">{{ $latest->name_product }}</h4></a>
                            <div class="rate center-block">
                                <img src="{{ asset('assets/images/icon/icon-star.png') }}">
                            </div>
                            <div class="price">
                                <strong class="price-text-color">${{ $latest->price }}</strong>
                                <label class="old-price-text-color">${{ $latest->special_price }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
   </div>
