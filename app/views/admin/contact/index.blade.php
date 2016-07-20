@extends('admin.user.layout')

@section('title') Contact Management @stop

@section('admin_user_content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Contact <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Pages / contact
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        {{--<div class="col-md-12 form-group">--}}
            {{--<a href="{{ URL::route('admin.adContact.create') }}" class="btn btn-success">--}}
                {{--<i class="fa fa-plus"></i> Create new--}}
            {{--</a>--}}
        {{--</div>--}}

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover roles-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{--<th>{{{ trans('admin_contact.table.customer') }}}</th>--}}
                            <th>{{{ trans('admin_contact.table.comment') }}}</th>
                            <th>{{{ trans('admin_contact.table.create_at') }}}</th>
                            <th>{{{ trans('admin_contact.table.actions.title') }}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr class="role-item">
                                <td>{{ $contact->id }}</td>
{{--                                <td><a href="#"> {{{ $contact-> customer()->last_name}}} </a></td>--}}
                                <td>{{{ $contact->comments}}}</td>
                                <td>{{{ $contact->created_at}}}</td>
                                <td>
                                    <i class="fa fa-trash"></i> <a class="delete-btn" href="{{ URL::route('admin.adContact.delete', array('adContact' => $contact->id)) }}">{{{ trans('admin_contact.table.actions.delete') }}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <?php echo $contacts->links(); ?>
            </div>
        </div>
    </div>
@stop