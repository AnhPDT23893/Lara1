@extends('admin.user.layout')

@section('title') Ship Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ship <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Economy / ship
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-9">
            @if (isset($ship))
                {{ Form::model($ship, array('route' => array('admin.adShip.update', $ship->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            @else
                {{ Form::open(array('route' => array('admin.adShip.store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
            @endif
                <div class="form-group">
                    {{ Form::label('country', trans('admin_ship.form.country'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{ Form::select('country',array('1' => 'Vietnamese', '2' => 'American', '3' => 'Japanese'), null, array('class' => 'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('city', trans('admin_ship.form.city'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-5">
                        {{ Form::text('city', null, array('class' => 'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('price', trans('admin_ship.form.price'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-4">
                        {{ Form::text('price', null, array('class' => 'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="reset" class="btn btn-default">{{{ trans('admin_ship.create.clear') }}}</button>
                        {{ Form::submit(isset($ship) ? trans('admin_ship.edit.submit') : trans('admin_ship.create.submit'), array('class' => 'btn btn-primary')) }}
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>
@stop