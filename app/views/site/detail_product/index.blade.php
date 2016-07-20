@extends('layouts.site')

@section('title')
    Detail
@endsection

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/detail_product/detail.less') }}">
        <link rel="stylesheet" href="{{ asset('assets/less/site/detail_product/detail_product.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/xoverlay/xoverlay.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel/owl.carousel.css') }}">
@endsection

    @section("content")

        <div class="wrapper">
            <header>
                @include('site.elements.header')
            </header>
            <div class="content">
                <div class="clearfix"></div>
                <div class="slide-show">
                   <div class="show">
                       <img class="img-responsive" src="{{asset('assets/images/slide-show/slide-categories.png')}}"/>
                       <p class="container">
                           <a href="javascript:void(0);">{{$product->name_product}}</a>
                       </p>
                   </div>
               </div>

                <div class="container">
                    <div class="detail_product">
                        <div class="detail">
                            <div class="col-md-6 col-xs-12">
                                <img class="img-responsive img-detail col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 col-sm-offset-1" src="{{asset($product->path)}}">
                            </div>
                            <div class="col-md-6">
                                 <div class="name">
                                    <h2 class="col-md-12 col-xs-12" ><a href="">{{$product->name_product}}</a></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="review">
                                    <img class="col-md-3 pull-left" src="{{ asset('assets/images/icon/icon-star.png') }}"/>
                                    <p class="col-md-5 pull-left">3 Review(s) | Add your review</p>
                                    <span class="col-md-4 pull-right"><a href="#">Mail to a friends&nbsp;&nbsp;</a><span class="fa fa-envelope"></span></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="price-detail">
                                    <p class="col-md-2 col-sm-2 col-xs-3 special-detail">${{ $product->price}}</p>
                                    <p class="col-md-6 col-sm-7 col-xs-6 old-price-detail">${{ $product->special_price }}</p>
                                    <p class="col-md-4 col-sm-3 col-xs-3 instock pull-right">Availabilri:In stock</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="overview">
                                    <h4>Quick Overview</h4>
                                    <p >
                                        Lorem ipsum color sit amet, consestur adipiscing elit. Proid tristique, est nasus fiora patheong leona catlyn vayne master yi
                                        lusian draven trymdame ashe riven reketon tristina darius grar arry leblace lux mogana blictank thesth warwich jax
                                    </p>
                                </div>
                                <div class="select">
                                        <h4>Valiable Option</h4>
                                        <div class=" col-md-6 col-sm-6 col-xs-6 option">
                                            <p class="col-md-3 col-sm-4 col-xs-4">Size</p>
                                            <select class="col-md-9 col-sm-8 col-xs-8 ">
                                                <option>Choice an option...</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>LL</option>
                                            </select>
                                        </div>
                                        <div class=" col-md-6 col-sm-6 col-xs-6 pull-right option">
                                            <p class="col-md-3 col-sm-4 col-xs-4">Color</p>
                                            <select class="col-md-9 col-sm-8 col-xs-8">
                                                <option>Choice an option...</option>
                                                <option>Red</option>
                                                <option>Green</option>
                                                <option>Blue</option>
                                                <option>Yellow</option>
                                                <option>Blue</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12 add-cart">
                                        <form class="col-md-3 col-sm-3 col-xs-3" action="demo_form.asp">
                                            <span class="col-md-4 col-sm-4 col-xs-4 qty">Qty:</span>
                                            <span class="col-md-8 col-sm-8 col-xs-8">
                                                 <input class="input" type="number" name="quantity" min="1" max="10">
                                            </span>
                                        </form>
                                        <a class="add col-md-4 col-sm-3 cpl-xs-3" href="javscript:;" class="add2cart" data-id="{{ $product->id }}" data-name="{{ $product->name_product }}" data-price="{{ $product->price }}" data-img="{{asset($product->path)}}">
                                            <span class="fa fa-shopping-cart add-to-cart"><span class="to-cart">&nbsp;&nbsp;ADD TO CART</span> </span>
                                        </a>
                                        <span class="fa fa-heart col-md-1 col-sm-1 col-xs-1"></span>
                                        <span class="fa fa-random col-md-1 col-sm-1 col-xs-1"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="social col-md-12">
                                        <h5 class="col-md-2 col-sm-2 col-xs-2">Social:</h5>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                            <li class="fa fa-facebook"></li>
                                        </span>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                            <li class="fa fa-twitter"></li>
                                        </span>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                         <li class="fa fa-linkedin"></li>
                                        </span>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                         <li class="fa fa-pinterest"></li>
                                        </span>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                            <li class="fa fa-google-plus"></li>
                                        </span>
                                        <span class=" col-md-1 col-sm-1 col-xs-1">
                                            <li class="fa fa-rss"></li>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                <li class="active" role="presentation">
                                    <a data-toggle="tab" role="tab" href="#description" id="description-tab" aria-controls="description" aria-expanded="true">DECRIPTION</a>
                                </li>
                                <li class="" role="presentation">
                                    <a data-toggle="tab" role="tab" href="#information" id="information-tab" aria-controls="information" aria-expanded="false">ADDITIONAL INFORMATION</a>
                                </li>
                               <li class="" role="presentation">
                                   <a data-toggle="tab" role="tab" href="#tag" id="tag-tab" aria-controls="tag" aria-expanded="false">PRODUCT TAGS</a>
                               </li>
                                <li class="" role="presentation">
                                    <a data-toggle="tab" role="tab" href="#review" id="rivew-tab" aria-controls="rivew" aria-expanded="false">PRODUCT TAGS</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div id="description" class="tab-pane fade in active" role="tabpanel" aria-labelledby="description-tab">
                                    <p> {{ $product->description }}</p>
                                </div>
                                <div id="information" class="tab-pane fade" role="tabpanel" aria-labelledby="information-tab">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                        Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                                        Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                                        Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr,
                                        vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                                        sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown,
                                        tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                    </p>
                                </div>
                                <div id="tag" class="tab-pane fade" role="tabpanel" aria-labelledby="tag-tab">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer,
                                        iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                        Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free,
                                        carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them,
                                        vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
                                    </p>
                                </div>
                                <div id="review" class="tab-pane fade" role="tabpanel" aria-labelledby="review-tab">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.
                                        Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                                        Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.
                                        Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan,
                                        sartorial keffiyeh echo park vegan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('site.detail_product.also_like')
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
        <script type="text/javascript" src="{{ asset('assets/js/site/detail_product/detail.js') }}"></script>
@endsection




