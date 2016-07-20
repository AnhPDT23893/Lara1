@extends('admin.product.layout')

@section('admin_product_content')

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
            @if (isset($product))
                {{ Form::model($product, array('route' => array('admin.adProduct.update', $product->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
            @else
                {{ Form::open(array('route' => array('admin.adProduct.store'), 'method' => 'POST', 'files' => 'true', 'class' => 'form-horizontal')) }}
            @endif
                <div class="form-group">
                    {{ Form::label('product_name', trans('admin_product.form.product_name'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-7">
                        {{ Form::text('name_product', null, array('class' => 'form-control')) }}
                        <span id="helpBlock" class="help-block">Product name can not exist special characters</span>
                        @if (count($usernameErrors = $errors->get('name_product')))
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
                    {{ Form::label('category', trans('admin_product.form.category'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-7">
                         {{ Form::select('category_id', $categories, null, array('class' => 'form-control')) }}
                        <span id="helpBlock" class="help-block">Must be valid category</span>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                            {{ Form::label('price', trans('admin_product.form.price'), array( 'class' =>' col-md-3 control-label' ))}}
                        <div class="col-md-2">
                            {{ Form::text('price', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div>
                        {{ Form::label('special_price', trans('admin_product.form.special_price'), array( 'class' =>'col-md-2 control-label' )) }}
                        <div class="col-md-2">
                            {{ Form::text('special_price',null,  array('class' => 'form-control')) }}
                        </div>
                    </div>
               </div>

                <div  class="form-group">
                    <div>
                        {{ Form::label('size', trans('admin_product.form.size'), array('class' => 'col-md-3 control-label')) }}
                        <div class="col-md-2">
                            {{ Form::select('size[]', array('XXL' => 'XXL', 'XL' => 'XL', 'M' => 'M', 'L' => 'L', 'S' => 'S'), null, array('class' => 'form-control select2-container', 'multiple' => 'multiple')) }}
                        </div>
                    </div>

                    <div>
                        {{ Form::label('color', trans('admin_product.form.color'), array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-2">
                            {{ Form::select('color[]', array('blue' => 'Blue', 'orange' => 'Orange', 'red' => 'Red', 'pink' => 'Pink', 'White' => 'White'), null, array('class' => 'form-control select2-container', 'multiple' => 'multiple')) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('quantity', trans('admin_product.form.quantity'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-3">
                        {{ Form::number('quantity', null, array('class' => 'col-md-3 form-control', 'min' => '1')) }}
                    </div>

                </div>

                <div class="form-group ">
                    {{ Form::label('description', trans('admin_product.form.desc'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-7">
                        {{Form::textarea('description', null, array('class'=>'form-control')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('status', trans('admin_product.form.status'), array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-7">
                         {{ Form::select('status[]', array('hot' => "HOT", 'new' => "NEW", 'sale' => "SALE", 'sold_out' => 'SOLD OUT'), null, array('class' => 'form-control select2-container', 'multiple' => 'multiple')) }}
                    </div>
                </div>

                <div class="form-group ">
                    {{ Form::label('path', trans('admin_product.form.path'), array('class' => 'col-md-3 control-label')) }}
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
                        <button type="reset" class="btn btn-default">{{{ trans('admin_product.form.create.clear') }}}</button>
                        {{ Form::submit(isset($product) ? trans('admin_product.form.edit.submit') : trans('admin_product.form.create.submit'), array('class' => 'btn btn-primary')) }}
                    </div>
                </div>

            {{ Form::close() }}
    </div>
@stop