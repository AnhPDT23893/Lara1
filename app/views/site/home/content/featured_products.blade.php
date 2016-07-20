<div class="featured_products">
    <div class="container">
        <div class="title clearfix">
            <h3>FEATURED PRODUCTS</h3>
            <div class="count">
                <span class="col-md-4 col-sm-4 col-xs-4"></span>
                <div class="col-md-1 col-sm-2 col-xs-3">[ {{ $features->count() }} ]</div>
                <span class="col-md-4 col-sm-4 col-xs-4"></span>
            </div>
        </div>
        <div class="row product">
            @foreach($features as $feature)
                <div class="col-md-3 col-sm-4 col-xs-4 item">
                    <div class="photo">
                        <div class="xoverlay x-simple">
                            <img class="img-responsive" src="{{ asset($feature->path) }}">
                            <div class="xoverlay-box">
                                <div class="xoverlay-data x-icon-left-right">
                                    <span class="x-circle x-white">
                                         <a href="javscript:;" class="add2cart" data-id="{{ $feature->id }}" data-name="{{ $feature->name_product }}" data-price="{{ $feature->price }}" data-img="{{asset($feature->path)}}" class="add-to-cart">
                                            <i class="fa fa-shopping-cart "></i>
                                         </a>
                                    </span>
                                    <span></span>
                                    <span class="x-circle x-white " >
                                         <a href="{{ URL::route('site.product.show', ['id' => $feature->id]) }}" class="quick-view">
                                            <i class="fa fa-eye eye"></i>
                                         </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info clearfix">
                        <a href="{{ URL::route('site.product.show', ['id' => $feature->id]) }}"><h4 class="">{{ $feature->name_product }}</h4></a>
                        <div class="rate center-block">
                            <img src="{{ asset('assets/images/icon/icon-star.png') }}">
                        </div>
                        <div class="price">
                            <strong class="price-text-color">${{ $feature->price }}</strong>
                            <label class="old-price-text-color">${{ $feature->special_price }}</label>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--<div class="load_more">--}}
            {{--<button class="btn btn-default">LOAD MORE</button>--}}
        {{--</div>--}}
    </div>
</div>