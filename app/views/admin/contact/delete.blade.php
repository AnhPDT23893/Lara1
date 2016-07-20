@extends('admin.user.layout')

@section('title') Contact Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Contact <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Pages / contact
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-5">
            {{ Form::model($contact, array('route' => array('admin.adCategory.destroy', $contact->id), 'method' => 'DELETE')) }}
                <p>Are you sure to delete contact: {{{ $contact-> customer()->first_name }}} &nbsp; {{{ $contact-> customer()->last_name }}}</p>

                {{ link_to_route('admin.adContact.index', trans('admin_contact.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_contact.form.delete'), array('class' => 'btn btn-danger')) }}

            {{ Form::close() }}
        </div>
    </div>
@stop