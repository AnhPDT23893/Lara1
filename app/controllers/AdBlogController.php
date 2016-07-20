<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/23/2015
 * Time: 3:46 PM
 */

class AdBlogController extends BaseController{

    public function index()
    {
//        $searchUserForm = new SearchUserForm();
        $limit = Input::get('limit', 15);

        $blogs = Blog::simplePaginate($limit);
//        $blog -> $searchUserForm->search(Input::all());

        return View::make('admin.blog.index', array(
            'blogs' => $blogs,
//            'searchUserForm' => $searchUserForm,
        ));
    }

    /**
     * create new block
     */
    public  function create()
    {
//        $users = array();
//        foreach(User::all() as $user)
//            $users[$user->id] = $user->name;

        return View::make('admin.blog.form');
    }

    public function store()
    {
        $validator = Validator::make($data = Input::all(), Blog::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $data['published'] = json_encode(Input::get('published')) ? 1 : 0;

        $data['user_id'] = Auth::user()->id;
        $blog = Blog::create($data);

        $path = Input::file('path');
        $filename = $path->getClientOriginalName();

        $path->move('assets/images/blog/',$filename);

        return Redirect::action('AdBlogController@index');
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        return View::make('admin.blog.info_blog', compact('blog'));
    }

    /**
     * show the form for editing the specifies role
     *
     * @param integer $id
     * return mixes
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog->published = json_decode($blog->published) ? 1 : 0;

        return View::make('admin.blog.form', compact('blog'));
    }

    /**
     * update the sprcified resource in storage
     *
     * @param int $id
     * return Response
     */
    public function update($id)
    {
        $blog = Blog::findOrFail($id);
        $validator = Validator::make($data = Input::all(), Blog::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $blog->update($data);
        return Redirect::action('AdBlogController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.blog.delete', compact('blog'));
        } else {
            $blog->delete();
            return Redirect::action('AdBlogController@index');
        }
    }
} 