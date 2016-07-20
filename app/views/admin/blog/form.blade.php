@extends('admin.user.layout')

@section('title') Blog Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blog <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Pages / blog
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div>
            @if (isset($blog))
                {{ Form::model($blog, array('route' => array('admin.adBlog.update', $blog->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            @else
                {{ Form::open(array('route' => array('admin.adBlog.store'), 'method' => 'POST', 'files' => 'true', 'class' => 'form-horizontal')) }}
            @endif
                <div class="form-group">
                    {{ Form::label('tittle', trans('admin_blog.form.title'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{ Form::text('title', null, array('class' => 'form-control')) }}
                        <span id="helpBlog" class="help-blog">Title can not exist special characters</span>
                        @if (count($usernameErrors = $errors->get('title')))
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
                    {{ Form::label('description', trans('admin_blog.form.description'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                         {{Form::textarea('description', null, array('class'=>'form-control')) }}
                    </div>
                </div>

                <div class="form-group ">
                    {{ Form::label('description', trans('admin_blog.form.content'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{Form::textarea('content', null, array('class'=>'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('published',trans('admin_blog.form.published'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{ Form::select('published', array('1' => 'Publish', '0' => 'Not Publish'), null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group ">
                    {{ Form::label('path', trans('admin_blog.form.path'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{Form::file('path', null, array('class'=>'form-control')) }}
                    </div>
                </div>

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
                        <button type="reset" class="btn btn-default">{{{ trans('admin_blog.form.create.clear') }}}</button>
                        {{ Form::submit(isset($product) ? trans('admin_blog.form.edit.submit') : trans('admin_blog.form.create.submit'), array('class' => 'btn btn-primary')) }}
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>
@stop