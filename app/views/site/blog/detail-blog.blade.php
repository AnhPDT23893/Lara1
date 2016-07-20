
@extends('layouts.site')

@section('title')
    Detail Blog
@endsection
@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/blog/blog.less') }}">
@endsection

    @section("content")

        <header>
            @include('site.elements.header')
        </header>
         <div class="clearfix"></div>
         <div class="slide-show">
            <div class="show">
                <img class="img-responsive" src="{{asset('assets/images/about/Layer170.png')}}"/>
                <p class="container">
                    <a href="javascript:void(0);">Detail Blog</a>
                </p>
            </div>
        </div>
        <div class="content">
    <div class="container view-detail-blog">
        <div class="list-detail-blog row">
            <h3 class=""><a href="#">{{ $blog->title }}</a></h3>
            <h4 class="">By <span>{{$blog->username}}</span> on {{$blog->created_at}}  </h4>

            <img class="col-md-12 col-xs-12 img-responsive" src="{{ asset($blog->path) }}"/>
            <p >Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputa
                te velit esse molestie consequ, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesenluptatum zzril delenit augue duis dolore te
                feugait nulla facilisi.cerat facer possim assum.</br></br>

                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in
                iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</br></br>

                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</br></br> </p>


        </div>
    </div>
    <div class="comment">
        <div class="container view">
            <h3 class="">4 Comment</h3>
            <div class="clearfix"></div>
            <div class="view-comment">
                <img class="col-md-1 col-xs-1" src="{{ asset('assets/images/header/logo.png') }}"/>
                <h4 class="col-md-10 col-xs-10">David Pike</h4>
                <p class="btn reply col-md-1 col-xs-1"><span>&nbsp;&nbsp;Reply&nbsp;&nbsp;<i class="fa fa-angle-right">&nbsp;&nbsp;</i></span></p>
                <p class="col-md-11 col-xs-11 pull-right">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                Vestibulum libero nisl, porta vel, scelerisque eget, malesuada.

                </p>
                <p class="col-md-11 col-xs-11 pull-right time-comment" style="color: #999999">10 hour</p>
                <div class="clearfix"></div>
            </div>
            <div class="view-comment">
                <img class="col-md-1 col-xs-1" src="{{ asset('assets/images/header/logo.png') }}"/>
                <h4 class="col-md-10 col-xs-10">David Pike</h4>
                <p class="btn reply col-md-1 col-xs-1"><span>&nbsp;&nbsp;Reply&nbsp;&nbsp;<i class="fa fa-angle-right">&nbsp;&nbsp;</i></span></p>
                <p class="col-md-11 col-xs-11 pull-right">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                    Vestibulum libero nisl, porta vel, scelerisque eget, malesuada.

                </p>
                <p class="col-md-11 col-xs-11 pull-right time-comment" style="color: #999999">10 hour</p>
                <div class="clearfix"></div>
            </div>
            <div class="view-comment">
                <img class="col-md-1 col-xs-1" src="{{ asset('assets/images/header/logo.png') }}"/>
                <h4 class="col-md-10 col-xs-10">David Pike</h4>
                <p class="btn reply col-md-1 col-xs-1"><span>&nbsp;&nbsp;Reply&nbsp;&nbsp;<i class="fa fa-angle-right">&nbsp;&nbsp;</i></span></p>
                <p class="col-md-11 col-xs-11 pull-right">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                    Vestibulum libero nisl, porta vel, scelerisque eget, malesuada.

                </p>
                <p class="col-md-11 col-xs-11 pull-right time-comment" style="color: #999999">10 hour</p>
                <div class="clearfix"></div>
            </div>
            <div class="view-comment">
                <img class="col-md-1 col-xs-1 " src="{{ asset('assets/images/header/logo.png') }}"/>
                <h4 class="col-md-10 col-xs-10">David Pike</h4>
                <p class="btn reply col-md-1 col-xs-1"><span>&nbsp;&nbsp;Reply&nbsp;&nbsp;<i class="fa fa-angle-right">&nbsp;&nbsp;</i></span></p>
                <p class="col-md-11 pull-right">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                    Vestibulum libero nisl, porta vel, scelerisque eget, malesuada.
                    10 hours ago</br></br>
                </p>
                <p class="col-md-11 pull-right time-comment" style="color: #999999">10 hour</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class=" container post-comment">
            <div class="col-md-12 col-xs-12">
                <h3 class="">Post Comment</h3>
            </div>

            <div class="col-md-6 col-xs-6 input-comment">
                <p class="col-md-12 ">Name <span style="color: #ec0d0d">*</span></p>
                <input class="col-md-12 col-xs-12" type="text" name="name">
            </div>
            <div class="col-md-6 col-xs-6 input-comment">
                <p class="col-md-12">Email <span style="color: #ec0d0d">*</span></p>
                <input class="col-md-12 col-xs-12" type="text" name="email">
            </div>
            <div class="col-md-12 col-xs-12">
                <p class="col-md-12">Comment <span style="color: #ec0d0d">*</span></p>
                <textarea class=" col-md-12 col-xs-12" name="comment" rows="3"></textarea>
            </div>
            <div class="submit">
                <p class="col-md-3 col-xs-3 pull-right ">* Required Fields</p>
                <form class="col-md-4 col-xs-4 pull-right">
                    <input type="submit" name="submit" value="Submit Comment">
                </form>
            </div>
        </div>
    </div>
</div>

       <footer>
            @include('site.elements.footer')
       </footer>

    @endsection
