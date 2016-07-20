<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/19/2015
 * Time: 11:20 PM
 */

class CategoryController extends BaseController{

    /**
     * Display a listing of categories
     *
     * @return Response
     */
    public  function index()
    {
        $limit = Input::get('limit', 15);
        $categories = Categories::simplePaginate($limit);

        return View::make('admin.category.index', array(
            'categories' => $categories,
        ));
    }

    /**
     * Show the form for creating a new category
     *
     * @return Response
     */
    public  function create()
    {
        $categories = array();

        foreach (Categories::all() as $category) {
            $categories[$category->id] = $category->name;
        }
//        $categories = Categories::where('parent_id', 0)->get();

        return View::make('admin.category.form', compact('categories'));
    }

    /**
     * Store a newly created role in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make($data = Input::all(), Categories::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Categories::create($data);
        return Redirect::action('CategoryController@index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $category = Categories::findOrFail($id);
        $validator = Validator::make($data = Input::all(), Categories::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $category->update($data);

        return Redirect::action('CategoryController@index');
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param integer $id
     * @return mixed
     */
    public function edit($id)
    {
        $categories = Categories::find($id);
        foreach (Categories::all() as $category) {
            $categories[$category->id] = $category->name;
        }

        return View::make('admin.category.form', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.category.delete', array(
                'category' => $category,
            ));
        } else {
            $category->delete();
            return Redirect::action('CategoryController@index');
        }
    }
} 