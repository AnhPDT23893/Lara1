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
        <div class="col-md-12 form-group">
            <a href="{{ URL::route('admin.adCategory.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Create new
            </a>
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover roles-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{{ trans('admin_category.table.category_name') }}}</th>
                            <th>{{{ trans('admin_category.table.parent_id') }}}</th>
                            <th>{{{ trans('admin_category.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr class="role-item">
                                <td>{{ $category->id }}</td>
                                <td>{{{ $category->name }}}</td>
                                <td>{{{ $category->parent_id }}}</td>
                                <td>
                                    <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adCategory.edit', array('adCategory' => $category->id)) }}">{{{ trans('admin_category.table.actions.edit') }}}</a>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adCategory.delete', array('adCategory' => $category->id)) }}">{{{ trans('admin_category.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $categories->links(); ?>
            </div>
        </div>
    </div>
@stop