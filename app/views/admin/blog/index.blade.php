@extends('admin.user.layout')

@section('title') Block Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blog <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Pages / blog
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12 form-group">
            <a href="{{ URL::route('admin.adBlog.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Create new
            </a>
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover roles-table">
                    <thead>
                        <tr>
                            <th>#</th>\
                            <th>{{{ trans('admin_blog.table.img') }}}</th>
                            <th>{{{ trans('admin_blog.table.title') }}}</th>
                            <th>{{{ trans('admin_blog.table.username') }}}</th>
                            <th>{{{ trans('admin_blog.table.path') }}}</th>
                            <th>{{{ trans('admin_blog.table.published') }}}</th>
                            <th>{{{ trans('admin_blog.table.create_at') }}}</th>
                            <th>{{{ trans('admin_blog.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr class="role-item">
                                <td>{{ $blog->id }}</td>
                                <td><img src="{{asset($blog->path)}}" width="50px" height="50px"></td>
                                <td> <a href="{{URL::route('admin.adBlog.show', array('id' => $blog->id))}}">{{$blog->title}}</a></td>
                                <td>
                                    <span class="label label-info">{{{ $blog->user->username }}}</span>
                                </td>
                                <td>{{{ $blog->path}}}</td>
                                <td>{{{ $blog->published}}}</td>
                                <td>{{{ $blog->created_at}}}</td>
                                <td>
                                    <i class="fa fa-edit"></i> <a href="{{ URL::route('admin.adBlog.edit', array('adBlog' => $blog->id)) }}">{{{ trans('admin_blog.table.actions.edit') }}}</a>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adBlog.delete', array('adBlog' => $blog->id)) }}">{{{ trans('admin_blog.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $blogs->links(); ?>
            </div>
        </div>
    </div>
@stop