@extends('site/user/index')

@section('title')
    Register
@stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{asset('assets/less/site/user/register.less')}}"
@endsection

@section('user_content')
<div id="content">
    <div class="clearfix"></div>
    <div class="slide-show">
       <div class="show">
           <img class="img-responsive" src="{{asset('assets/images/about/Layer170.png')}}"/>
           <p class="container">
               <a href="javascript:void(0);">REGISTER</a>
           </p>
       </div>
    </div>
    <div class="register">
        <div class="container">
            <div class="alert alert-success" role="alert">
                <strong>Register Success!</strong> Please click <a href="{{ URL::route('site.home.index') }}" class="alert-link">here</a> back to Home.
            </div>
        </div>
    </div>
</div>

@stop