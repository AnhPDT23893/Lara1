<?php

class HomeController extends BaseController {

	public function index()
	{

        $latest = Product::orderByRaw("RAND()")->limit(15)->get();

        
        $features = Product::where('status', 'HOT')->limit(8)->get();

        $blogs = Blog::orderBy('created_at', 'desc')->limit(10)->get();

        $best_seller = Product::where('status', 'SALE')->limit(15)->get();

        $list_category = Categories::where('name', 'T-Shirts')
                                    ->orWhere('name', 'Shorts')
                                    ->orWhere('name', 'Jeans')
                                    ->get();
        $list_id = array();
        foreach ($list_category as $key => $category) {
            $list_id[] = $category->id;
        }
        $bottom_1 = Product::whereIn('category_id', $list_id)->limit(3)->get();

        $list_category = Categories::where('name', 'Bots')
                                    ->orWhere('name', 'Sandals')
                                    ->orWhere('name', 'Sports')
                                    ->get();
        $list_id = array();
        foreach($list_category as $category)
        {
            $list_id[] = $category->id;
        }
        $bottom_2 = Product::whereIn('category_id', $list_id)->limit(3)->get();

        $list_category = Categories::where('name', 'Accessories')->get();
        $list_id = array();

        foreach($list_category as $category)
        {
            $list_id[] = $category->id;
        }
        $bottom_3 = Product::whereIn('category_id', $list_id)->limit(3)->get();

		return View::make('site.home.content.index', array(
                    'latests' => $latest,
                    'features'=> $features,
                    'blogs'   => $blogs,
                    'best_sellers' => $best_seller,
                    'bottom_1' => $bottom_1,
                    'bottom_2' => $bottom_2,
                    'bottom_3' => $bottom_3,
        ));
	}


}
