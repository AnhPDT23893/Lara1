<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/17/2015
 * Time: 8:53 AM
 */

class AdProductController extends BaseController{

    public function index()
    {
        $searchProductFrom = new FormProduct();
        $limit = Input::get('limit', 15);

        $products = $searchProductFrom->search(Input::all());
        $products = $products->simplePaginate($limit);

        return View::make('admin.product.index', array(
                    'products' => $products,
                    'searchProductFrom' => $searchProductFrom,
        ));
    }

    /**
     * Show the form create a new product
     *
     * @return response
     */
    public function create()
    {
        $categories = array();
        foreach (Categories::all() as $category) {
            $categories[$category->id] = $category->name;
        }
        return View::make('admin.product.form', compact('categories','users'));
    }

    /**
     * create function store
     * @return Respionse
     */
    public function store()
    {
        $validator = Validator::make($data = Input::except( 'size', 'color','status'), Product::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $data['size'] = json_encode(Input::get('size'));
        $data['color'] = json_encode(Input::get('color'));
        $data['status'] = json_encode(Input::get('status'));

        $data['user_id'] = Auth::user()->id;
//        $data['category_id']->sync(Input::get('categories'));
        $product = Product::create($data);
//        $product->categories()->sync(Input::get('categories'));

        $path = Input::file('path');
        $filename = $path->getClientOriginalName();

        $path->move('assets/images/products/',$filename);
        $data['path'] = 'assets/images/product/'.$filename;

        return Redirect::action('AdProductController@index');
    }

    /**
     * Edit product
     * @param integer $id
     * return mixed
     */
    public function edit($id)
    {
        $product = Product::with('category')->find($id);
        $categories = array();

//        foreach ($product->categories as $category) {
//            $categories[] = $category->id;
//        }
        $product->category->id;

        $product->category = $categories;
        $product->size = json_decode($product->size);
        $product->color = json_decode( $product->color);
        $product->status = json_decode($product->status);

        $categories = array();
        foreach (Categories::all() as $category) {
            $categories[$category->id] = $category->name;
        }


        return View::make('admin.product.form', compact('product', 'categories'));
    }

    /**
     * Update product
     */
    public function update($id)
    {
        $product = Product::findOfFail($id);
        $validator = Validator::make($data = Input::except( 'size', 'color', 'status'), Product::rules());

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $product->update($data);
//        $product->category()->sync(Input::get('categories'));

        return Redirect::action('AdProductController@index');
    }

    /**
     * Remove the Product
     * @param ing $id
     * return Response
     */
    public  function destroy($id) {
        $product = Product::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.product.delete', array(
                'product' => $product,
            ));
        } else {
            $product->delete();
            return Redirect::action('AdProductController@index');
        }
    }

    public function show($id)
    {
        $product = Product::find($id);

        return View::make('admin.product.info_product', compact('product'));
    }
} 