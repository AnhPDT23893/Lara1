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
            <div class="panel panel-default">
                <div class="panel-head clearfix">
                    <span class="fa fa-user" style="float: left"></span>
                    <h3 class="panel-title">Create an Account</h3>
                </div>
                <div class="panel-body">
                    <label>Personal Information</label>
                    {{ Form::open(array('route' => array('site.register.store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
                        <div class="form-group">
                            {{ Form::label('first_name', trans('user.first_name'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-5">
                                {{ Form::text('first_name', null, array('class' => 'form-control')) }}
                                <span id="helpBlock" class="help-block">First name can not exist special characters</span>
                                @if (count($firstnameError = $errors->get('first_name')))
                                    <div class="alert alert-error alert-danger">
                                        <ul>
                                            @foreach ($firstnameError as $error)
                                                <li>{{{ $error }}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('last_name', trans('user.last_name'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-5">
                                {{ Form::text('last_name', null, array('class' => 'form-control')) }}
                                <span id="helpBlock" class="help-block">Last name can not exist special characters</span>
                                @if (count($lastnameError = $errors->get('last_name')))
                                    <div class="alert alert-error alert-danger">
                                        <ul>
                                            @foreach ($lastnameError as $error)
                                                <li>{{{ $error }}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('username', trans('user.username'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-5">
                                {{ Form::text('username', null, array('class' => 'form-control')) }}
                                <span id="helpBlock" class="help-block">Username can not exist special characters</span>
                                @if (count($usernameErrors = $errors->get('username')))
                                    <div class="alert alert-error alert-danger">
                                        <ul>
                                            @foreach ($usernameErrors as $error)
                                                <li>{{{ $error }}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', trans('user.e_mail'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-5">
                                {{ Form::email('email', null, array('class' => 'form-control')) }}
                                <span id="helpBlock" class="help-block">Must be valid email</span>
                                @if (count($emailErrors = $errors->get('email')))
                                    <div class="alert alert-error alert-danger">
                                        <ul>
                                            @foreach ($emailErrors as $error)
                                                <li>{{{ $error }}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', trans('user.password'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-4">
                                {{ Form::password('password', array('class' => 'form-control')) }}
                                <span id="helpBlock" class="help-block">Password must be at least 4 character</span>
                                @if (count($passwordErrors = $errors->get('password')))
                                    <div class="alert alert-error alert-danger">
                                        <ul>
                                            @foreach ($passwordErrors as $error)
                                                <li>{{{ $error }}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('password_confirmation', trans('user.password_confirmation'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-4">
                                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                            </div>
                            @if (count($confirmationErrors = $errors->get('password_confirmation')))
                                <div class="alert alert-error alert-danger">
                                    <ul>
                                        @foreach ($confirmationErrors as $error)
                                            <li>{{{ $error }}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', trans('user.phone'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-6">
                                {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('address', trans('user.address'), array('class' => 'col-md-3 control-label')) }}
                            <div class="col-md-6">
                                {{ Form::text('address', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<div class="col-sm-offset-3 col-sm-9">--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--{{ Form::checkbox('confirmed', 1, isset($user) && $user->confirmed ? true : false) }} Confirmed--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        @if (Session::get('error'))
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="alert alert-error alert-danger">
                                    <ul>
                                        @foreach (Session::get('error') as $error)
                                            <li>{{{ $error }}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="reset" class="btn btn-default">{{{ trans('user.clear') }}}</button>
                                {{ Form::submit(trans('user.submit'), array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@stop