@extends('admin.user.layout')

@section('title') Product Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Product <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Economy / product
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            {{ Form::model($product, array('route' => array('admin.adProduct.destroy', $product->id), 'method' => 'DELETE')) }}

                <p>Are you sure to delete product: {{{ $product->name_product }}}</p>

                <div class="form-group">
                    {{ link_to_route('admin.adProduct.index', trans('admin_product.delete.cancel'), null, array('class' => 'btn btn-default')) }}
                    {{ Form::submit(trans('admin_product.delete.submit'), array('class' => 'btn btn-danger')) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop