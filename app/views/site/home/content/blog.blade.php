
<div class="blog">
    <div class="container">
        <div class="title">
            <h3>BLOG</h3>
            <div class="count">
                <span class="col-md-4 col-sm-4 col-xs-4"></span>
                <div class="col-md-1 col-sm-2 col-xs-3">[ {{ $blogs->count()}} ]</div>
                <span class="col-md-4 col-sm-4 col-xs-4"></span>
            </div>
        </div>
    </div>
    <div class="bg-blog">
        <div class="container">
            <div id="owl-blog" class="owl-carousel owl-theme">
               @foreach($blogs as $blog)
                    <div class="item">
                        <div class="col-md-5 col-sm-5 col-xs-6 blog-img">
                            <img class="img-responsive" src="{{asset($blog->path)}}">
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-6 blog-content">
                            <h3 class="title"><a href="{{ URL::route('site.blog.show', ['id' => $blog->id]) }}">{{ $blog->title }}</a> </h3>
                            <span class="showChar">{{ $blog->description }}</span>
                            <h5>By <i style="color: #fe5a27; font-family: OpenSan-italic;">{{ $blog->username }}</i> on {{$blog->created_at}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="customNavigation">
                <a class="left pull-left"><li class="btn fa fa-chevron-left prev-blog"></li></a>
                <a class="right pull-right"><li class="btn fa fa-chevron-right next-blog"></li></a>
            </div>
        </div>
    </div>
</div>

