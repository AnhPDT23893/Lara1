<div id="header">
    <div class="container">
        <ul class="nav form-group">
            <li class="phone">
                <a href="">
                    <i class="fa fa-phone"></i>
                    <span>(+84) 0978 135 xxx</span>
                </a>
            </li>
            <li class="envelop">
                 <a href="">
                     <i class="fa fa-envelope"></i>
                     <span>pank@gmail.com</span>
                 </a>
            </li>
            <li class="form-search">
                {{--<button><i class="fa fa-search"></i></button>--}}

                {{--<input class="form-control" type="text" placeholder="Search Name Products">--}}
                {{ Form::open(array('route' => array('site.product.index'), 'class' => 'form-inline', 'method' => 'GET')) }}
                    <button><i class="fa fa-search"></i></button>
                    <div class="from-group">
                        {{ Form::text('name_product', '', array('class' => 'form-control', 'placeholder' => 'Search Product Name')) }}
                    </div>
                {{ Form::close() }}
            </li>
            <li class=" pull-right cart" id="top-cart">
               <a href="#" class="dropdown-toggle cart-btn" data-toggle="dropdown">
                   <i class="fa fa-shopping-cart"></i>
               </a>
               <ul class="dropdown-menu" role="menu">
                   <li class="list-item">

                   </li>
                   <li>
                       <div class="total clearfix">
                           <h4 class="col-md-6 col-sm-6">Subtotal:</h4>
                           <p class="col-md-6 col-sm-6">$<i class="price-total"></i></p>
                       </div>
                   </li>
                   <li>
                       <div class="col-md-12 btn-cart">
                            <button type="button" class=" col-md-4 col-sm-4 col-xs-4 btn btn-success">UPDATE</button>
                            <button type="button" class=" col-md-4 col-sm-4 col-xs-4 btn btn-success empty-cart-btn">EMPTY CART</button>
                           <a href="{{ URL::route('site.order.show') }}" class=" col-md-4 col-sm-4 col-xs-4 btn btn-success">ORDERS</a>

                       </div>
                   </li>
                   <div class="cart-empty clearfix" style="display:none;">
                      <div class="col-md-3 col-sm-3">
                          <img class="pr-image" rel="#"  style="width: 60px;">
                      </div>
                      <div class="col-md-5 col-sm-5">
                          <h4><i  class="pr-name"></i></h4>
                          <label><i>$</i><i class="pr-label"></i></label>
                          <p>Qty: <i  class="pr-qty"></i></p>
                      </div>
                      <div class="col-md-4 col-sm-4 icon-cart">
                          <i class="fa fa-refresh"></i>
                          <i class="fa fa-remove pr-remove"></i>
                      </div>
                  </div>
               </ul>
            </li>
            @if(!Auth::check())
                <li class="pull-right login">
                    <a href="{{ URL::route('site.register.index')}}">
                        <span>Register</span>
                    </a>
                </li>
                <li class="pull-right register">
                    <a href="{{ URL::route('site.login.login')}}"><i class="fa fa-key"></i>
                        <span>Login</span>
                    </a>
                </li>
            @else
                <li class=" pull-right dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ URL::route('site.profile.show', ['id' => Auth::user()->id]) }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
{{--                            <a href="{{ URL::route('login.logout') }} "><i class="fa fa-fw fa-power-off"></i> Log Out</a>--}}
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
<div class="main-menu">
    <div class="container">
        <div class="navbar" role="navigation">
            <div class="navbar-header font-transform-inherit">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{URL::route('site.home.index')}}" class="navbar-brand logo">
                    <img src="{{asset('assets/images/header/logo.png')}}"/>
                </a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="item-menu"><a href="{{ URL::route('site.home.index')}}">HOME</a></li>
                    <li class="item-menu"><a href="{{ URL::route('site.about.index') }}">ABOUT</a></li>
                    <li class="dropdown dropdown-megamenu item-menu">
                        <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="{{ URL::route('site.category.index')}}">WOMEN</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">BAGS</a></li>
                                        <li><a href="#">ACSSESRIES</a></li>
                                        <li><a href="#">WATCHES</a></li>
                                        <li><a href="#">SUNGLASSES</a></li>
                                        <li><a href="#">JEWELLYRE</a></li>
                                    </ul>
                                    <h5><a href="{{ URL::route('site.category.index')}}">See All Categories</a></h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col ">
                                    <h4>CLOTHING</h4>
                                    <ul>
                                        <li><a href="#">DRESSD</a></li>
                                        <li><a href="#">TOPS</a></li>
                                        <li><a href="#">T-SHIRTS</a></li>
                                        <li><a href="#">SHORTS</a></li>
                                        <li><a href="#">JEANS</a></li>
                                        <li><a href="#">SHOES</a></li>
                                    </ul>
                                    <h5><a href="{{ URL::route('site.category.index')}}">See All Categories</a></h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>SALES</h4>
                                    <div class="product-sale">
                                        <img class="img-responsive" src="{{asset('assets/images/header/product-menu.png')}}">
                                        <p class="price">$67.23</p>
                                        <label class="old-price">$96.00</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-megamenu item-menu">
                        <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="">MEN</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">BAGS</a></li>
                                        <li><a href="#">ACSSESRIES</a></li>
                                        <li><a href="#">WATCHES</a></li>
                                        <li><a href="#">SUNGLASSES</a></li>
                                        <li><a href="#">JEWELLYRE</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col ">
                                    <h4>CLOTHING</h4>
                                    <ul>
                                        <li><a href="#">DRESSD</a></li>
                                        <li><a href="#">TOPS</a></li>
                                        <li><a href="#">T-SHIRTS</a></li>
                                        <li><a href="#">SHORTS</a></li>
                                        <li><a href="#">JEANS</a></li>
                                        <li><a href="#">SHOES</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>SALES</h4>
                                    <div class="product-sale">
                                        <img class="img-responsive" src="{{asset('assets/img/header/product-menu.png')}}">
                                        <p class="price">$67.23</p>
                                        <label class="old-price">$96.00</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-megamenu item-menu">
                        <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="">GIRLS</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">BAGS</a></li>
                                        <li><a href="#">ACSSESRIES</a></li>
                                        <li><a href="#">WATCHES</a></li>
                                        <li><a href="#">SUNGLASSES</a></li>
                                        <li><a href="#">JEWELLYRE</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col ">
                                    <h4>CLOTHING</h4>
                                    <ul>
                                        <li><a href="#">DRESSD</a></li>
                                        <li><a href="#">TOPS</a></li>
                                        <li><a href="#">T-SHIRTS</a></li>
                                        <li><a href="#">SHORTS</a></li>
                                        <li><a href="#">JEANS</a></li>
                                        <li><a href="#">SHOES</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 col-sm-4 header-navigation-col">
                                    <h4>SALES</h4>
                                    <div class="product-sale">
                                        <img class="img-responsive" src="{{asset('assets/img/header/product-menu.png')}}">
                                        <p class="price">$67.23</p>
                                        <label class="old-price">$96.00</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-megamenu item-menu">
                        <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="">BOYS</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="col-md-4 header-navigation-col">
                                    <h4>CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">BAGS</a></li>
                                        <li><a href="#">ACSSESRIES</a></li>
                                        <li><a href="#">WATCHES</a></li>
                                        <li><a href="#">SUNGLASSES</a></li>
                                        <li><a href="#">JEWELLYRE</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 header-navigation-col ">
                                    <h4>CLOTHING</h4>
                                    <ul>
                                        <li><a href="#">DRESSD</a></li>
                                        <li><a href="#">TOPS</a></li>
                                        <li><a href="#">T-SHIRTS</a></li>
                                        <li><a href="#">SHORTS</a></li>
                                        <li><a href="#">JEANS</a></li>
                                        <li><a href="#">SHOES</a></li>
                                    </ul>
                                    <h5>See All Categories</h5>
                                </div>
                                <div class="col-md-4 header-navigation-col">
                                    <h4>SALES</h4>
                                    <div class="product-sale">
                                        <img class="img-responsive" src="{{asset('assets/img/header/product-menu.png')}}">
                                        <p class="price">$67.23</p>
                                        <label class="old-price">$96.00</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="item-menu"><a href="{{ URL::route('site.blog.index') }}">BLOG</a></li>
                    <li class="item-menu"><a href="{{ URL::route('site.Contact.index') }}">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>