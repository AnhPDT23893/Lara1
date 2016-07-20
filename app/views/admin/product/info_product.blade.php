@extends('admin.product.layout')

@section('admin_product_content')

   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Product <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Product detail
                </li>
            </ol>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{{ trans('admin_product.table.product_name') }}}</th>
                    <th>{{{ trans('admin_product.table.price') }}}</th>
                    <th>{{{ trans('admin_product.table.special_price') }}}</th>
                    <th>{{{ trans('admin_product.table.size') }}}</th>
                    <th>{{{ trans('admin_product.table.color') }}}</th>
                    <th>{{{ trans('admin_product.table.quantity') }}}</th>
                    <th>{{{ trans('admin_product.table.description') }}}</th>
                </tr>
            </thead>
            <tbody>
                <tr class="product-item">
                    <td>{{ $product->name_product }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->special_price }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            </tbody>
        </table>
        {{ link_to_route('admin.adProduct.index', trans('admin_blog.form.back'), null, array('class' => 'btn btn-default')) }}
    </div>
@stop