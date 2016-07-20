<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 6/11/2015
 * Time: 9:16 PM
 */

class SiteCategoryController extends BaseController {

    public function index()
    {
        $limit = Input::get('limit', 5);
        $list_category = Categories::where('parent_id', 11)->get();
        $list_id = array(15,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33);
        foreach($list_category as $category)
        {
            $list_id[] = $category->id;
        }
        $category_women = Product::whereIn('category_id', $list_id)->limit(50)->get();
        $category_women = Product::simplePaginate($limit);

        $dresses = Product::where('category_id', 14)->get();
        return View::make('site.category.index', array(
            'category_women' => $category_women,
            'dresses'       => $dresses,
        ));
    }
} 