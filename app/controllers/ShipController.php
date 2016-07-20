<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 6/9/2015
 * Time: 9:04 PM
 */

class ShipController extends BaseController {

    public function index()
    {
        $list_ship= Ship::where('country', 'Việt Nam')->get();
        $list_id = array();
        foreach ($list_ship as $ship_id) {
            $list_id[$ship_id->id] = $ship_id->country;
        }
        $ship = Order::whereIn('ship_id', $list_id)->get();
        dd($list_ship);

        return View::make('site.user.profile', array(
            'ship' => $ship,
        ));
    }
} 