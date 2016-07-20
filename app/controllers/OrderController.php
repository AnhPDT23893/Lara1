<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 6/7/2015
 * Time: 10:27 PM
 */

class OrderController extends BaseController {

    public function index()
    {
        return View::make('site.order.order');
    }

    public function show()
    {

        return View::make('site.order.order');
    }

    public function store()
    {
        $data = Input::all();

        $customer = Customer::create([
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'last_name' => $data['name'],
        ]);
//        dd($customer);
        $ship = Ship::find($data['ship_id']);

        $totalPrice = $ship->price;
        if (is_array($data['cartInfo'])) {
            foreach($data['cartInfo'] as $e) {
                $totalPrice += (int)$e['price'];
            }
        }
        dd($ship);

        $order = Order::create([
            'grand_total' => $totalPrice,
            'ship_id' => $ship->id,
            'status' => 'pending',
            'customer_id' => $customer->id,
            'ship_to' => $data['address'] +'-'+ $ship->city +'-'+ $ship->country,
        ]);
        dd($order);
        foreach($data['cartInfo'] as $k=>$e) {
            OrderItem::create([
                'total' => (int)$e['price'] * (int)$e['quantity'],
                'product_id' => $k,
                'orders_id' => $order->id,
            ]);
        }

        return View::make('site.order.success');
    }
}