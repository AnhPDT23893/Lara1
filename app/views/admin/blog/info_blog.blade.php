@extends('admin.product.layout')

@section('admin_product_content')

   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blog <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Blog detail
                </li>
            </ol>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{{ trans('admin_blog.table.title') }}}</th>
                    <th>{{{ trans('admin_blog.table.description') }}}</th>
                    <th>{{{ trans('admin_blog.table.content') }}}</th>
                </tr>
            </thead>
            <tbody>
                <tr class="product-item">
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->content }}</td>
                </tr>
            </tbody>
        </table>
        {{ link_to_route('admin.adBlog.index', trans('admin_blog.form.back'), null, array('class' => 'btn btn-default')) }}
    </div>
@stop