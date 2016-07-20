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
        <div class="col-md-12 form-group">
            <a href="{{ URL::route('admin.adShip.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Create new
            </a>
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover roles-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{{ trans('admin_ship.table.country') }}}</th>
                            <th>{{{ trans('admin_ship.table.city') }}}</th>
                            <th>{{{ trans('admin_ship.table.price') }}}</th>
                            <th>{{{ trans('admin_ship.table.create_at') }}}</th>
                            <th>{{{ trans('admin_ship.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ships as $ship)
                            <tr class="role-item">
                                <td>{{ $ship->id }}</td>
                                <td>{{{ $ship->country }}}</td>
                                <td>{{{ $ship->city }}}</td>
                                <td>{{{ $ship->price }}}</td>
                                <td>{{{ $ship->created_at }}}</td>
                                <td>
                                    <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adShip.edit', array('adShip' => $ship->id)) }}">{{{ trans('admin_ship.table.actions.edit') }}}</a>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adShip.delete', array('adShip' => $ship->id)) }}">{{{ trans('admin_ship.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $ships->links(); ?>
            </div>
        </div>
    </div>
@stop