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
        <div class="col-md-5">
            {{ Form::model($ship, array('route' => array('admin.adShip.destroy', $ship->id), 'method' => 'DELETE')) }}
                <p>Are you sure to delete ship:
                    <span>Country: </span>{{{ $ship->country }}}
                    <span>City: </span>{{{ $ship->city }}}
                </p>

                {{ link_to_route('admin.adShip.index', trans('admin_ship.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_ship.form.delete'), array('class' => 'btn btn-danger')) }}

            {{ Form::close() }}
        </div>
    </div>
@stop