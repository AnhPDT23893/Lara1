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
        <div class="col-md-12 form-group">
            <a href="{{ URL::route('admin.adCustomer.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Create new
            </a>
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover roles-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{{ trans('admin_customer.table.first_name') }}}</th>
                            <th>{{{ trans('admin_customer.table.last_name') }}}</th>
                            <th>{{{ trans('admin_customer.table.username') }}}</th>
                            <th>{{{ trans('admin_customer.table.address') }}}</th>
                            <th>{{{ trans('admin_customer.table.phone') }}}</th>
                            <th>{{{ trans('admin_customer.table.age') }}}</th>
                            <th>{{{ trans('admin_customer.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr class="role-item">
                                <td>{{ $customer->id }}</td>
                                <td>{{{ $customer->first_name }}}</td>
                                <td>{{{ $customer->last_name }}}</td>
                                <td>{{{ $customer->user()->username }}}</td>
                                <td>{{{ $customer->address }}}</td>
                                <td>{{{ $customer->phone }}}</td>
                                <td>{{{ $customer->age }}}</td>
                                <td>
                                    <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adCustomer.edit', array('adCustomer' => $customer->id)) }}">{{{ trans('admin_customer.table.actions.edit') }}}</a>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adCustomer.delete', array('adCustomer' => $customer->id)) }}">{{{ trans('admin_customer.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $customers->links(); ?>
            </div>
        </div>
    </div>
@stop