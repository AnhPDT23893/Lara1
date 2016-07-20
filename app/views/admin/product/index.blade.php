@extends('admin.product.layout')

@section('admin_product_content')

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

    <div class="row ">
        <div class="col-lg-12 tool-bar">
           @include('admin.product.search')
        </div>
    </div>

    <div class="rơw">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{{ trans('admin_product.table.product_name') }}}</th>
                            <th>{{{ trans('admin_product.table.category') }}}</th>
                            <th>{{{ trans('admin_product.table.username') }}}</th>
                            <th>{{{ trans('admin_product.table.path') }}}</th>
                            <th>{{{ trans('admin_product.table.status') }}}</th>
                            <th>{{{ trans('admin_product.table.create_at') }}}</th>
                            <th>{{{ trans('admin_product.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr class="product-item">
                                <td>{{ $product->id }}</td>
                                <td><a href="{{URL::route('admin.adProduct.show', array('id' => $product->id))}}">{{ $product->name_product }}</a></td>
                                <td>
                                        {{{ $product->category->name }}}
                                </td>
                                <td>
                                        {{{ $product->user->username }}}
                                </td>
                                <td>{{ $product->path }}></td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adProduct.edit', array('adProduct' => $product->id)) }}">{{{ trans('admin_product.table.actions.edit') }}}</a>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adProduct.delete', array('adProduct' => $product->id)) }}">{{{ trans('admin_product.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $products->links(); ?>
            </div>
        </div>
    </div>


@stop