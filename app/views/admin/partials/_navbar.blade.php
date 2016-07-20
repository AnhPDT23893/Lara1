<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Dashboard</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                {{--<li class="message-preview">--}}
                    {{--<a href="#">--}}
                        {{--<div class="media">--}}
                            {{--<span class="pull-left">--}}
                                {{--<img class="media-object" src="http://placehold.it/50x50" alt="">--}}
                            {{--</span>--}}
                            {{--<div class="media-body">--}}
                                {{--<h5 class="media-heading"><strong>Admin</strong>--}}
                                {{--</h5>--}}
                                {{--<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur...</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="message-footer">
                    <a href="#">All Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{ Confide::user()->email }}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ URL::route('admin.adUser.logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li @if(Route::currentRouteName() == 'admin.dashboard.index') class="active" @endif >
                <a href="{{ URL::route('admin.dashboard.index') }}">
                    <i class="fa fa-fw fa-dashboard"></i>&nbsp; &nbsp; Statistic
                </a>
            </li>
            <li @if(route::currentRouteName() == 'admin.adUser.index' || route::currentRouteName() == 'admin.adRole.index' || route::currentRouteName() == 'admin.adCustomer.index') class="active"@endif>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-users"></i> &nbsp; &nbsp; Users  &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-down"></i></a>
                <ul id="demo" class="collapse">
                    <li @if(Route::currentRouteName() == 'admin.adUser.index') class="active" @endif >
                        <a href="{{ URL::route('admin.adUser.index') }}" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-users"></i>&nbsp; &nbsp; Users
                        </a>
                    </li>
                    <li @if(Route::currentRouteName() == 'admin.adRole.index') class="active" @endif >
                        <a href="{{ URL::route('admin.adRole.index') }}" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-fw fa-leaf"></i>&nbsp; &nbsp; Roles
                        </a>
                    </li>
                    <li @if(Route::currentRouteName() == 'admin.adCustomer.index') class="active" @endif >
                        <a href="{{ URL::route('admin.adCustomer.index') }}" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-users"></i>&nbsp; &nbsp; Customers
                        </a>
                    </li>
                </ul>
            </li>
            <li @if(route::currentRouteName() == 'admin.adProduct.index' || route::currentRouteName() == 'admin.adCategory.index' || route::currentRouteName() == 'admin.adOrder.index') class="active"@endif>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-money"></i>&nbsp; &nbsp; eCommerce &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li @if(route::currentRouteName() == 'admin.adProduct.index') class="active"@endif>
                                <a href="{{URL::route('admin.adProduct.index')}}" data-toggle="collapse" data-target="#demo1">
                                    <i class="fa fa-shopping-cart"></i>&nbsp; &nbsp; Product
                                </a>
                            </li>
                            {{--<li @if(route::currentRouteName() == 'admin.adProduct.index') class="active"@endif>--}}
                                {{--<a href="admin.product.info_product" data-toggle="collapse" data-target="#demo">--}}
                                    {{--Product Information--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            <li @if(route::currentRouteName() == 'admin.adCategory.index') class="active"@endif>
                                <a href="{{URL::route('admin.adCategory.index')}}" data-toggle="collapse" data-target="#demo1">
                                    <i class="fa fa-tasks"></i>&nbsp; &nbsp; Category
                                </a>
                            </li>
                            <li @if(route::currentRouteName() == 'admin.adShip.index') class="active"@endif>
                                <a href="{{URL::route('admin.adShip.index')}}" data-toggle="collapse" data-target="#demo1">
                                   <i class="fa fa-truck"></i>&nbsp; &nbsp; Ships
                                </a>
                            </li>
                            <li @if(route::currentRouteName() == 'admin.adOrder.index') class="active"@endif>
                                <a href="{{URL::route('admin.adOrder.index')}}" data-toggle="collapse" data-target="#demo1">
                                   <i class="fa fa-truck"></i>&nbsp; &nbsp; Orders
                                </a>
                            </li>
                        </ul>
                    </li>
            <li @if(route::currentRouteName() == 'admin.adBlog.index') class="active"@endif>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-file-o"></i> &nbsp; &nbsp;Pages &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-down"></i></a>
                <ul id="demo2" class="collapse">
                    <li @if(Route::currentRouteName() == 'admin.adBlog.index') class="active" @endif >
                        <a href="{{ URL::route('admin.adBlog.index') }}" data-toggle="collapse" data-target="#demo2">
                            <i class="fa fa-rss"></i>&nbsp; &nbsp; Blogs
                        </a>
                    </li>
                    <li @if(Route::currentRouteName() == 'admin.adContact.index') class="active" @endif >
                        <a href="{{ URL::route('admin.adContact.index') }}" data-toggle="collapse" data-target="#demo2">
                            <i class="fa fa-fw fa-leaf"></i>&nbsp; &nbsp; Contact us
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
