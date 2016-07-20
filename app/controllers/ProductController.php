<?php

class ProductController extends BaseController {

	public function index()
	{
        $searchProductFrom = new FormProduct();
        $limit = Input::get('limit', 15);

        $products = $searchProductFrom->search(Input::all());
        $products = $products->simplePaginate($limit);


        return View::make('site.home.search_product', array(
            'products' => $products,
            'searchProductForm' => $searchProductFrom,
        ));
	}

    public function show($id)
    {
        $product = Product::find($id);

        // $list_category = Categories::where('id', $product->category_id)->get();
        // $list_id = array();
        // foreach ($list_category as $key => $category) {
        //     $list_id[] = $category->id;
        // }
        $categories = Product::where('category_id', $product->category_id)->get();
        // dd($categories->count());

        return View::make('site.detail_product.index', array(
                'product' => $product,
                'categories' => $categories,
        ));
    }


}
