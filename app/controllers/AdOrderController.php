<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 10:15 AM
 */

class AdOrderController extends BaseController {

    public function index()
    {
        $limit = Input::get('limit', 15);

        $orders = Order::simplePaginate($limit);

        return View::make('admin.order.index', array(
            'orders' => $orders
        ));
    }

    /**
     * Show the form create a new product
     *
     * @return response
     */
    public function create()
    {
//        $categories = array();
//        foreach (Categories::all() as $category) {
//            $categories[$category->id] = $category->name;
//        }

        return View::make('admin.order.form');
    }

    /**
     * create function store
     * @return Respionse
     */
    public function store()
    {
        $validator = Validator::make($data = Input::except('customers', 'ship', 'order_item'), Order::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $order = Order::create($data);
        $order->customer()->sync(Input::get('customers'));
        $order->ship()->sync(Input::get('ship'));
        $order->orderItem()->sync(Input::get('order_item'));

        return Redirect::action('AdOrderController@index');
    }

    public function show($id)
    {
        $order = Order::find($id);

        return View::make('admin.order.detail_order', array(
            'order' => $order
        ));
    }
    /**
     * Edit product
     * @param integer $id
     * return mixed
     */
    public function edit($id)
    {
        $product = Product::with('categories')->find($id);
        $categories = array();

        foreach ($product->categories as $category) {
            $categories[] = $category->id;
        }

        $product->categories = $categories;

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
        $validator = Validator::make($data = Input::except('categories'), Product::rules());

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $product->update($data);
        $product->categories()->sync(Input::get('categories'));

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
} 