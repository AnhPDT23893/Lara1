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
        <div class="col-md-9">
        @if (isset($category))
            {{ Form::model($category, array('route' => array('admin.adCategory.update', $category->id), 'method' => 'PUT')) }}
        @else
            {{ Form::open(array('route' => array('admin.adCategory.store'), 'method' => 'POST', 'class' => 'form-horizontal')) }}
        @endif
            <div class="form-group">
                {{ Form::label('name', trans('admin_category.form.name'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                        <span id="helpBlock" class="help-block">{{{ trans('admin_category.form.help_block') }}}</span>
                        @if (count($nameErrors = $errors->get('name')))
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
                {{ Form::label('parent', trans('admin_category.form.parent'), array('class' => 'col-md-3 control-label')) }}
                <div class="col-md-5">
                     {{ Form::select('parent_id', $categories, null, array('class' => 'form-control')) }}
                </div>
             </div>

            <div class="form-group">
                {{ link_to_route('admin.adCategory.index', trans('admin_category.form.cancel'), null, array('class' => 'btn btn-default')) }}
                {{ Form::submit(trans('admin_category.form.save'), array('class' => 'btn btn-primary')) }}
            </div>

        {{ Form::close() }}
        </div>
    </div>
@stop