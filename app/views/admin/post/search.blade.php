{{Form::model($searchPostForm, array('class' => 'forrm-inline', 'method' => 'GET'))}}

    <div class="form-group">
        <a href="{{ URL::route('admin.adPost.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i>{{{ trans('admin_post.table.create') }}}
        </a>
    </div>

    <div class="form-group">
        {{ Form::text('username_email', Input::old('username_email'), array('class' => 'form-control', 'placeholder' => trans('admin'))) }}
    </div>