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
               <div class="contact-info row">
                   <div class="col-md-6 col-sm-6 col-xs-12 form-contact">
                       <h3><a href="#">CONTACT INFORMATION</a></h3>

                       {{ Form::open(array('route' => array('site.Contact.store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
       {{--            {{ Form::open() }}--}}
                            <div class="form-group">
                                {{ Form::label('last_name','Name: ', array( 'class' => 'label-control col-md-2')) }}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{ Form::text('last_name', null, array( 'class' => 'form-control')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('email','Email: ', array( 'class' => 'label-control col-md-2')) }}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{ Form::email('email', null, array( 'class' => 'form-control')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('last_name','Comment: ', array( 'class' => 'label-control col-md-2')) }}
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{ Form::textarea('comments', null, array( 'class' => 'form-control', 'rows' => '5')) }}
                                </div>
                            </div>

                            {{ Form::submit('Submit', array('class'=> 'submit col-md-2 col-sm-3 col-xs-2 btn btn-default')) }}
                            <i style="padding-top: 20px" class="col-md-3 col-sm-5 col-xs-3 pull-right">Require Fields *</i>
                        {{Form::close()}}
                   </div>
                   <div class="col-md-6 col-sm-6 col-xs-12 other-contact">
                       <h3><a href="#">OTHER INFORMATION</a></h3>
                       <p class="col-md-12">
                           Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nis
                           ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in te
                           velit esse molestie consequ, vel illum dolore eu feugiat nulla facilisis at vero eros et accum
                       </p>
                       <div class="col-md-12 address">
                           <i class="col-md-1 fa fa-map-marker"></i>
                           <address class="col-md-11">
                               <p><strong>Address 1 :</strong> Dai Thanh, Quoc Oai, Ha Noi</p>
                               <p><strong>Phone :</strong>(+84)978135793</p>
                               <p><strong>Mail :</strong>pank@gmail.com</p>
                           </address>
                       </div>
                       <div class="col-md-12 address">
                           <i class="col-md-1 fa fa-map-marker"></i>
                           <address class="col-md-11">
                               <p><strong>Address 1 :</strong> Dai Thanh, Quoc Oai, Ha Noi</p>
                               <p><strong>Phone :</strong>(+84)978135793</p>
                               <p><strong>Mail :</strong>pank@gmail.com</p>
                           </address>
                       </div>
                   </div>
               </div>
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