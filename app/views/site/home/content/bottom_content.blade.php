
<div class="content_bottom clearfix">
     <div class="container">
        <div class="seller">
            <div class="special-product col-md-4 col-sm-6 col-xs-6 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                <div class="row-fluid">
                    <h3>SPECIAL PRODUCT</h3>
                </div>
                <div  class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="bottom: -10px">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            @foreach($bottom_1 as $bottom1)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{ asset($bottom1->path) }}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom1->id }}" data-name="{{ $bottom1->name_product }}" data-price="{{ $bottom1->price }}" data-img="{{asset($bottom1->path)}}">
                                                            <i class="fa fa-shopping-cart cart add2cart" style="border-radius: 0px;"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom1->id]) }}" > {{ $bottom1->name_product }}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{$bottom1->price}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="item">
                           @foreach($bottom_2 as $bottom2)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{ asset($bottom2->path) }}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom2->id }}" data-name="{{ $bottom2->name_product }}" data-price="{{ $bottom2->price }}" data-img="{{asset($bottom2->path)}}">
                                                            <i class="fa fa-shopping-cart cart add2cart" style="border-radius: 0px;"></i>
                                                        </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom2->id]) }}">{{ $bottom2->name_product }}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{$bottom2->price}}</p>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <div class="item">
                            @foreach($bottom_3 as $bottom3)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{asset($bottom3->path)}}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom3->id }}" data-name="{{ $bottom3->name_product }}" data-price="{{ $bottom3->price }}" data-img="{{asset($bottom3->path)}}">
                                                            <i class="fa fa-shopping-cart cart add2cart" style="border-radius: 0px;"></i>
                                                        </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom3->id]) }}">{{ $bottom3->name_product}}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{$bottom3->price}}</p>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="discount-product col-md-4 col-sm-6 col-xs-6 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                <div class="row-fluid">
                    <h3>DISCOUNT</h3>
                </div>
                <div  class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" style="bottom: -10px">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            @foreach($bottom_1 as $bottom5)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{asset($bottom5->path)}}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom5->id }}" data-name="{{ $bottom5->name_product }}" data-price="{{ $bottom5->price }}" data-img="{{asset($bottom5->path)}}">
                                                            <i class="fa fa-shopping-cart cart add2cart" style="border-radius: 0px;"></i>
                                                        </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom5->id]) }}"> {{$bottom5->name_product}}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{$bottom5->price}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="item">
                           @foreach($bottom_2 as $bottom6)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{asset($bottom6->path)}}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom6->id }}" data-name="{{ $bottom6->name_product }}" data-price="{{ $bottom6->price }}" data-img="{{asset($bottom6->path)}}">
                                                            <i class="fa fa-shopping-cart cart add2cart" style="border-radius: 0px;"></i>
                                                        </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom6->id]) }}">{{$bottom6->name_product}}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{$bottom6->price}}</p>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <div class="item">
                            @foreach($bottom_3 as $bottom4)
                            <div class=" list-best row ">
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <div class="photo">
                                        <div class="xoverlay x-simple">
                                            <a href="#"><img src="{{asset($bottom4->path)}}" style="width: 100px"></a>
                                            <div class="xoverlay-box" style="margin-top:-5px">
                                                <div class="xoverlay-data">
                                                    <span class="x-circle x-white">
                                                        <a href="javascript:void(0);" class="add2cart" data-id="{{ $bottom4->id }}" data-name="{{ $bottom4->name_product }}" data-price="{{ $bottom4->price }}" data-img="{{asset($bottom4->path)}}">
                                                            <i class="fa fa-shopping-cart cart" style="border-radius: 0px;"></i>
                                                        </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 info-bottom">
                                    <h4><a href="{{ URL::route('site.product.show', ['id' => $bottom4->id]) }}">{{$bottom4->name_product}}</a></h4>
                                    <img src="{{asset('assets/images/icon/icon-star.png')}}">
                                    <p>${{ $bottom4->price }}</p>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class=" subscribe col-md-4 col-sm-12 col-xs-11 subscribe col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
                <div class="row-fluid">
                    <h3>SUBSCRIBE US</h3>
                </div>
                <div class="subscribe1 ">
                    <img class="img-responsive" src="{{asset('assets/images/icon/keep-in-touch.png')}}">
                    <div class=""style="position: relative; padding-left: 10px">
                        <h4>Subscribe Us</h4>
                        <p>By subscribe you will get the latest news form us.</p>
                        <input type="email" class="form-control col-md-10" placeholder="Your Email...">
                        <button type="submit" class="btn btn-default">Subscribe</button>
                    </div>
                </div>
                <div class="subscribe2">
                    <address>
                        <strong>ADDRESS:</strong><br>
                        <p>90 Bedford St New York, NY 041, USA</p><br>
                        <strong>PHONE:</strong><br>
                        <p>(010) 987 654 321</p><br>
                        <strong>EMAIL:</strong><br>
                        <a href="#">info@pank.vn</a>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>