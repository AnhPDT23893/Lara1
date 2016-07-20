@extends('admin.user.layout')

@section('title') Customer Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Customer <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Users / customer
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            {{ Form::model($customer, array('route' => array('admin.adCustomer.destroy', $customer->id), 'method' => 'DELETE')) }}
                <p>Are you sure to delete Customer: {{{ $customer->fist_name }}} {{{ $customer->last_name }}}</p>

                {{ link_to_route('admin.adCustomer.index', trans('admin_customer.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_customer.form.delete'), array('class' => 'btn btn-danger')) }}

            {{ Form::close() }}
        </div>
    </div>
@stop