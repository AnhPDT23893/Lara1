@extends('layouts.site')

@section('title')
    About
@endsection
@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/about/about.less') }}">
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
                       <a href="javascript:void(0);">ABOUT US</a>
                   </p>
               </div>
           </div>
            <div class="content about">
                <div class="container ">
                    <div class="bg-about col-md-12">
                        <img class="img-responsive" src="{{asset('assets/images/about/layer.png')}}"/>
                        <div class="about-info">
                            <p class="">
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nis ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in te velit
                                esse molestie consequ, vel illum dolore eu feugiat nulla facilisis at vero eros et accum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p class="shape">
                                <a class="col-md-1" href="#"><span class="fa fa-hand-o-right"></span></a>
                                <span class="col-md-11">
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nis ut aliquip ex ea commodo consequat.
                                    esse molestie consequ, vel illum dolore eu feugiat nulla facilisis at vero eros et accum. Lorem ipsum dolor sit amet, consectetur
                                    labore et dolore magna aliqua.
                                </span>
                            </p>
                            <p class="">
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nis ut aliquip ex ea commodo consequat.
                                esse molestie consequ, vel illum dolore eu feugiat nulla facilisis at vero eros et accum. Lorem ipsum dolor sit amet, consectetur
                                labore et dolore magna aliqua.
                            </p>
                            <p class="">
                                Ut wisi enim ad minim veniam, quis nostrud exerci tationullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                vulputate velit esse molestie consequat, vel illum dolore eu feugit nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
                                dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent
                                claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

       <footer>
            @include('site.elements.footer')
       </footer>

    @endsection





