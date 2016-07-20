
<div class="product-content col-md-9">
        <div  class="show-item ">
            <div class="list ">
                <div class="  item-list">
                    <span class="fa fa-th "></span>
                    <span class="fa fa-list"></span>
                </div>
                <span class="amount "> 5 item(s)</span>
                {{--<div class="limiter">--}}
                    {{--<span class="">Show</span>--}}
                    {{--<select class="">--}}
                        {{--<option>1</option>--}}
                        {{--<option>2</option>--}}
                        {{--<option>3</option>--}}
                        {{--<option>4</option>--}}
                        {{--<option>5</option>--}}
                    {{--</select>--}}
                    {{--<span class="">per page</span>--}}
                {{--</div>--}}
                <div class="session pull-right">
                    {{--<ul class="pagination pull-right">--}}
                        {{--<li><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#"><span class="fa fa-angle-right"></span></a></li>--}}
                        <?php echo $category_women->links(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @foreach($category_women as $category)
            <div class=" product-list">
                <div class="col-md-4 col-sm-4 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2 list-img">
                    <div class="xoverlay x-simple">
                        <img class="img-responsive  avatar x-img-main" alt="a" src="{{asset($category->path)}}">
                        <div class="xoverlay-box">
                            <div class="xoverlay-data x-icon-left-right">
                                <span class="x-circle x-white">
                                    <a href="javascript:;" class="add2cart" data-id="{{ $category->id }}" data-name="{{ $category->name_product }}" data-price="{{ $category->price }}" data-img="{{asset($category->path)}}">
                                        <i class="fa fa-shopping-cart cart" style="border-radius: 0px;"></i>
                                    </a>
                                </span>
                                <span class="x-circle x-white"><a href="{{ URL::route('site.product.show', ['id' => $category->id]) }}"><i class="fa fa-eye eye" style="border-radius: 0px;"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2 desc">
                    <h3><a href="#">{{ $category->name_product }}</a></h3>
                    <div class="star">
                        <p class="col-md-2 col-sm-2"><img src="{{asset('assets/images/icon/icon-star.png')}}" >
                        <p class="col-md-10 col-sm-10 pull-left">3 Review(s) | Add your review</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="special_price">
                        <p class="col-md-2 col-sm-2 new-price">${{$category->price}}</p>
                        <p class="col-md-10 col-sm-10 pull-left old-price">${{$category->special_price}}</p>
                    </div>
                    <div class="description">
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        @endforeach
        <div  class="show-item show-item-bottom">
            <div class="list list1">
                <div class="  item-list">
                    <span class="fa fa-th "></span>
                    <span class="fa fa-list"></span>
                </div>
                <span class="amount "> 5 item(s)</span>
                {{--<div class="limiter">--}}
                    {{--<span class="">Show</span>--}}
                    {{--<select class="">--}}
                        {{--<option>1</option>--}}
                        {{--<option>2</option>--}}
                        {{--<option>3</option>--}}
                        {{--<option>4</option>--}}
                        {{--<option>5</option>--}}
                    {{--</select>--}}
                    {{--<span class="">per page</span>--}}
                {{--</div>--}}
                <div class="session pull-right">
                    {{--<ul class="pagination ">--}}
                        {{--<li><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#"><span class="fa fa-angle-right"></span></a></li>--}}
                    {{--</ul>--}}
                    <?php echo $category_women->links(); ?>
                </div>
            </div>
        </div>
    </div>