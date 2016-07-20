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
        <div class="col-md-5">
            {{ Form::model($blog, array('route' => array('admin.adBlog.destroy', $blog->id), 'method' => 'DELETE')) }}
                <p>Are you sure to delete Blog: {{{ $blog->title }}}</p>

                {{ link_to_route('admin.adBlog.index', trans('admin_blog.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_blog.form.delete'), array('class' => 'btn btn-danger')) }}

            {{ Form::close() }}
        </div>
    </div>
@stop