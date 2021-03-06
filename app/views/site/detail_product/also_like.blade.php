   <div class="also_like">
        <div class="container">
             <div class="title clearfix">
                <h3>YOU MIGHT ALSO LIKE</h3>
                <div class="count">
                    <span class="col-md-4 col-sm-4 col-xs-4"></span>
                    <div class="col-md-1 col-sm-2 col-xs-3">[ {{{ $categories->count() }}} ]</div>
                    <span class="col-md-4 col-sm-4 col-xs-4"></span>
                </div>
            </div>
            <div class="customNavigation">
                <a class="pull-left"><li class="btn fa fa-chevron-left prev-like"></li></a>
                <a class="pull-right"><li class="btn fa fa-chevron-right next-like"></li></a>
            </div>
            <div id="owl-like" class="owl-carousel owl-theme row product">
                @foreach($categories as $category)
                    <div class="item">
                        <div class="photo">
                            <div class="xoverlay x-simple">
                                <img class="img-responsive avatar x-img-main" alt="a" src="{{asset($category->path)}}">
                                <div class="xoverlay-box">
                                    <div class="xoverlay-data x-icon-left-right">
                                        <span class="x-circle x-white">
                                            <a href="javascript:void(0);" class="add1cart">
                                                <i class="fa fa-shopping-cart cart add2cart"></i>
                                            </a></span>
                                        <span class="x-circle x-white"><a href="#" ><i class="fa fa-eye eye"></i></a></span>
                                    </div>
                                 </div>
                            </div>
                            {{--<div class="sale-off">--}}
                                {{--<a href="#">SOID OUT</a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="info clearfix">
                            <a href="javascript:void(0)"><h4 class="">{{ $category->name_product }}</h4></a>
                            <div class="rate center-block">
                                <img src="{{ asset('assets/images/icon/icon-star.png') }}">
                            </div>
                            <div class="price">
                                <strong class="price-text-color">{{ $category->price }}</strong>
                                <label class="old-price-text-color">{{ $category->special_price }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
