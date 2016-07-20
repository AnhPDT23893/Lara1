@extends('site/user/index')

@section('title')
        Login
@stop

@section('style_site')
    @parent
        <link rel="stylesheet/less" href="{{Asset('assets/less/site/user/login.less')}}"/>
@endsection

@section('user_content')

<div class="clearfix"></div>
    <div class="slide-show">
   <div class="show">
       <img class="img-responsive" src="{{asset('assets/images/about/Layer170.png')}}"/>
       <p class="container">
           <a href="javascript:void(0);">Login</a>
       </p>
   </div>
</div>
<div id="content">

    <div class="login">
        <div class="container">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-head clearfix">
                        <span class="fa fa-user" style="float: left"></span>
                        <h3 class="panel-title">Login Your Account</h3>
                    </div>

                    <div class=" panel-body">
                        <label>If you have an account with us, please login</label>
                        {{Form::open(array('route' => array('site.login.doLogin'), 'method' => 'POST','id'=>'form-login', 'class' => 'form-horizontal'))}}
                            {{--<div class="form-group">--}}
                                {{--{{Form::label('email', trans('user.e_mail'), null, array('class' => 'col-md-3 control-label'))}}--}}
                                {{--<div class="col-md-5">--}}
                                    {{--{{Form::email('email',null, array('id' => 'email', 'class' => 'email form-control', 'placeholder' => trans('user.e_mail') )) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--{{Form::label('password', trans('user.password'), null, array('class' => 'col-md-3 control-label'))}}--}}
                                {{--<div class="col-md-5">--}}
                                    {{--{{Form::password('password', array('id' => 'password','class' => 'password form-control', 'placeholder' => trans('user.password'))) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                {{ Form::label('email', trans('user.e_mail'), array('class' => 'col-md-3 col-xs-3 control-label')) }}
                                <div class="col-md-6 col-xs-6">
                                    {{ Form::text('email', null, array('class' => 'form-control')) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('address', trans('user.password'), array('class' => 'col-md-3 col-xs-3 control-label')) }}
                                <div class="col-md-6 col-xs-9">
                                    {{ Form::password('password', null, array('class' => 'form-control')) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-5 col-xs-5">
                                    {{Form::submit(trans('user.login.title'), array('class' => 'btn-login btn btn-success pull-right')) }}
                                </div>
                                <div class="col-md-4 col-xs-3 login-error">
                                    <p>* Require Field</p>
                                    <span>Forgot your password ?</span>
                                </div>
                            </div>

                        {{Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-head clearfix">
                        <span class="fa fa-user" style="float: left"></span>
                        <h3 class="panel-title">Create An Account</h3>
                    </div>

                    <div class=" panel-body">
                        <strong>New Customers</strong>
                        <div class="form-group">
                            <label>
                               By creating an account with our store, you will be able to move through the checkout
                               process faster, store multiple shipping addresses, view and track your orders in your
                               account and more.
                            </label>
                           <button class="btn btn-danger">Create an Account</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection

