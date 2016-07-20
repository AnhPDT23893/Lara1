@extends('admin.user')

@section('title') Post Management @stop

@section('admin_user_content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Post <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>Dasboard / posts
                </li>
            </ol>
        </div>
    </div>

    {{--<div class="row">--}}
        {{--<div class="col-md-12 form-group">--}}
            {{--<a href="{{URL::route('admin.asPost.create') }}" class="btn btn-success">--}}
                {{--<i class="fa fa-plus"></i> Create new--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-md-12">--}}
        {{----}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-lg-12 tool bar">
            @include('admin.post.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-border table-hover posts-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{{trans('admin_post.table.title')}}}</th>
                            <th>{{{trans('admin_post.table.content')}}}</th>
                            <th>{{{trans('admin_post.table.desciption')}}}</th>
                            <th>{{{trans('admin_post.table.user_name')}}}</th>
                            <th>{{{trans('admin_post.table.create_at')}}}</th>
                            <th>{{{trans('admin_post.table.actions.title')}}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('admin.post._list')
                    </tbody>
                </table>
                {{$post->links()}}
            </div>
        </div>
    </div>