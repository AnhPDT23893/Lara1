<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/17/2015
 * Time: 8:50 AM
 */

class Product extends Eloquent{

    protected $table = 'products';

    protected $fillable = array('name_product', 'price', 'special_price', 'path',
                            'size', 'color', 'quantity', 'description', 'user_id', 'status', 'category_id');

    public static function rules()
    {
        return array(
//            'name_product' => 'require|min:4|unique:products',
//            'quantity' => 'require|unsigned:products',
        );
    }

    public function category()
    {
        return $this->belongsTo('Categories', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
} 