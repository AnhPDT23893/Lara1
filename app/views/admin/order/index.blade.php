@extends('admin.user.layout')

@section('title') Order Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Order <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Economy / order
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover roles-table">
                <thead>
                    <tr>
                        <th>#</th>
{{--                        <th>{{{ trans('admin_order.table.customer') }}}</th>--}}
                        <th>{{{ trans('admin_order.table.ship_to') }}}</th>
                        <th>{{{ trans('admin_order.table.grand_total') }}}</th>
                        <th>{{{ trans('admin_order.table.status') }}}</th>
                        <th>{{{ trans('admin_order.table.create_at') }}}</th>
                        <th>{{{ trans('admin_order.table.actions.title') }}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="role-item">
                            <td><a href="{{URL::route('admin.adOrder.show', array('id' => $order->id))}}">{{ $order->id }}</a></td>
                            {{--<td> {{{ $order->customer()->last_name}}}</td>--}}
                            <td>{{{ $order->ship_to }}}</td>
                            <td>{{{ $order->grand_total }}}</td>
                            <td><span class="label label-success">{{{ $order->status}}}</span></td>
                            <td>{{{ $order->created_at }}}</td>
                            <td>
                                <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adOrder.edit', array('adOrder' => $order->id)) }}">{{{ trans('admin_order.table.actions.edit') }}}</a>
                                {{--<i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adCustomer.delete', array('adCustomer' => $customer->id)) }}">{{{ trans('admin_customer.table.actions.delete') }}}</a>--}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <?php echo $orders->links(); ?>
        </div>
    </div>
@stop