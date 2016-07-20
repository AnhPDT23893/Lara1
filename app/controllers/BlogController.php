<?php

class BlogController extends BaseController {

	public function index()
	{
        $limit = Input::all('limit', 5);
        $blogs = Blog::orderBy('created_at', 'desc')->limit(5)->get();
        $blogs = Blog::simplePaginate($limit);

        return View::make('site.blog.index', array(
            'blogs' => $blogs,
        ));
	}

    public function show($id)
    {
        $blog = Blog::find($id);

        return View::make('site.blog.detail-blog', array(
                'blog' => $blog,
        ));
    }


}
