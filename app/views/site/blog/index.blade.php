@extends('layouts.site')

@section('title')
    Blog
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

       <div class="slide-show">
          <div class="show">
              <img class="img-responsive" src="{{asset('assets/images/slide-show/slide-categories.png')}}"/>
              <p class="container">
                  <a href="javascript:void(0);">BLOGS</a>
              </p>
          </div>
      </div>
       <div class="content">
           <div class="container view-blog">
                @foreach($blogs as $blog)
               <div class="list-blog">
                   <div class="col-md-5 col-xs-5">
                       <a href="#"><img src="{{asset($blog->path)}}"/></a>
                   </div>
                   <div class=" col-md-7 col-xs-7 inform-blog">
                       <h3 class=""><a href="{{ URL::route('site.blog.show', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                       <p class="">{{$blog->description}} luptatum zzril delenit augue duis dolore te feugait nulla facilisi.cerat facer possim assum luptatum zzril delenit augue duis dolore te feugait nulla facilisi.cerat facer possim assum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequ,
                           vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesen
                           luptatum zzril delenit augue duis dolore te feugait nulla facilisi.cerat facer possim assum.<span><a href="#">[...]</a></span></p>
                       <h4>By <span>Jame</span> on {{ $blog->created_at }} </h4>
                       <a href="{{ URL::route('site.blog.show', ['id' => $blog->id]) }}" class="btn read-more"><i class="fa fa-chevron-circle-right"><span>&nbsp;&nbsp;READ MORE</span></i></a>
                   </div>
               </div>
               @endforeach

           </div>
            <div class=" page">
                  <?php echo $blogs->links(); ?>
              </div>
       </div>

       <footer>
            @include('site.elements.footer')
       </footer>

    @endsection





