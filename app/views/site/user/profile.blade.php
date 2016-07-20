@extends('site/user/index')

@section('title')
    Profile
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
               <a href="javascript:void(0);">Profile</a>
           </p>
       </div>
    </div>
    <div class="register">
        <div class="container">
            <div class=" row button-top col-md-offset-3">
                <div class="btn btn-default"><a href="#">PROFILE</a></div>
                <div class="btn btn-default"><a href="#">POST BLOG</a></div>
            </div>
            <div class="panel panel-default">
                <div class=" row panel-head clearfix">
                    <span class="fa fa-user" style="float: left"></span>
                    <h3 class="panel-title">User Information</h3>
                    <div class="btn btn-default pull-right"><a href="#"><i class="fa fa-pencil"></i>Edit</a></div>
                </div>
                <div class="panel-body">
                    <div class="profile">
                        <img src="" class="photo-user">

                    </div>
                </div>
        </div>
    </div>
</div>

@stop