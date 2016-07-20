<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 10:10 AM
 */

class OrderItem extends Eloquent {

    protected $table = 'order_item';

    protected $fillable = array('total', 'product_id', 'orders_id');

    protected static function rules()
    {
        return array();
    }

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }
} 