@extends('admin.user.layout')

@section('title') Category Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Category <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Economy / category
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            {{ Form::model($category, array('route' => array('admin.adCategory.destroy', $category->id), 'method' => 'DELETE')) }}
                <p>Are you sure to delete category: {{{ $category->name }}}</p>

                {{ link_to_route('admin.adCategory.index', trans('admin_category.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_category.form.delete'), array('class' => 'btn btn-danger')) }}

            {{ Form::close() }}
        </div>
    </div>
@stop