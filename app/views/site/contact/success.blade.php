@extends('layouts/site')
    @section('title')
        Contact
    @endsection
@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/style_layout.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/header.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/elements/footer.less') }}">
        <link rel="stylesheet/less" href="{{ asset('assets/less/site/contact/contact.less') }}">
@endsection

@section('content')
        <header>
            @include('site.elements.header')
        </header>

       <div class="slide-show">
          <div class="show">
              <img class="img-responsive" src="{{asset('assets/images/about/Layer170.png')}}"/>
              <p class="container">
                  <a href="javascript:void(0);">CONTACT US</a>
              </p>
          </div>
      </div>
       <div class="clearfix"></div>
       <div class="content" style="padding-bottom: 90px;">
           <div class="container contact">
               <div class="">
                   <div id="map_canvas" class="col-md-12 col-sm-12 col-xs-12" style="width:100%; height: 400px;"></div>
               </div>
               <div class="alert alert-success row" role="alert">
                    <strong>Thanks for comment, administrators will soon contact you!</strong> Please, click <a href="{{ URL::route('site.home.index') }}" class="alert-link">here</a> back to Home.
               </div>
       </div>

       <footer>
            @include('site.elements.footer')
       </footer>

    </div>

@endsection

@section('script')
    @parent
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="{{Asset('assets/js/site/contact/contact.js')}}"></script>
@stop