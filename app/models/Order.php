<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/12/2015
 * Time: 8:59 PM
 */

class Order extends Eloquent {

    protected $table = 'orders';

    protected $fillable = array('grand_total', 'status', 'ship_to', 'customer_id', 'ship_id');

    public static function rules()
    {
        return array();
    }

    public function customer()
    {
        return $this->belongsTo('Customer', 'customer_id');
    }

    public function ship()
    {
        return $this->belongsTo('Ship', 'ship_id');
    }

    public function orderItem()
    {
        return $this->belongsTo('OrderItem', 'orderItem_id');
    }
}