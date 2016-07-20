@foreach($post as $posts)
    <tr class="post-item">
        <td>{{{ $posts->id }}}</td>
        <td>{{{ $posts->title }}}</td>
        <td>{{{ $posts->content }}}</td>
        <td>{{{ $posts->description }}}</td>
        <td>
            @foreach($posts->users as $user)
                <span class="label label-info">{{{$user->name}}}</span>
         `  @endforeach
        </td>
        <td>{{{$posts->created_at}}}</td>
        <td>
            <i class="fa fa-edit"></i><a href="URL::route('admin.adPost.edit', array('adPost' => $posts->id))">{{{trans(admin_post.table.actions.edit)}}}</a>
            <i class="fa fa-trash"></i><a href="URL::route('admin.adPost.delete', array('adPost' => $posts->id))">{{{trans(admin_post.table.actions.delete)}}}</a>
        </td>
    </tr>
@endforeach