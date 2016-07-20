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
        <div class="col-md-9">
        @if (isset($customer))
            {{ Form::model($customer, array('route' => array('admin.adCustomer.update', $customer->id), 'method' => 'PUT')) }}
        @else
            {{ Form::open(array('route' => array('admin.adCustomer.store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
        @endif
            <div class="form-group">
                {{ Form::label('first_name', trans('admin_customer.form.first_name'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('first_name', null, array('class' => 'form-control')) }}
                        <span id="helpBlock" class="help-block">{{{ trans('admin_customer.form.help_block.first_name') }}}</span>
                        @if (count($nameErrors = $errors->get('first_name')))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    @foreach ($nameErrors as $error)
                                        <li>{{{ $error }}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('last_name', trans('admin_customer.form.first_name'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('last_name', null, array('class' => 'form-control')) }}
                        <span id="helpBlock" class="help-block">{{{ trans('admin_customer.form.help_block.last_name') }}}</span>
                        @if (count($nameErrors = $errors->get('last_name')))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    @foreach ($nameErrors as $error)
                                        <li>{{{ $error }}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('address', trans('admin_customer.form.address'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('address', null, array('class' => 'form-control ')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('phone', trans('admin_customer.form.phone'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('phone', null, array('class' => 'form-control ')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('age', trans('admin_customer.form.age'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('age', null, array('class' => 'form-control ')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="reset" class="btn btn-default">{{{ trans('admin_customer.form.create.clear') }}}</button>
                    {{ Form::submit(isset($customer) ? trans('admin_customer.form.edit.submit') : trans('admin_customer.form.create.submit'), array('class' => 'btn btn-primary')) }}
                </div>
            </div>

        {{ Form::close() }}
        </div>
    </div>
@stop