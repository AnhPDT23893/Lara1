<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/19/2015
 * Time: 11:18 PM
 */

class Categories extends Eloquent{
    public $timestamp = false;

    protected $table = 'categories';

    protected $fillable = array('id', 'name', 'parent_id');

    public static function rules()
    {
        return array(
            'name'      => 'required|max:32|unique:categories',
        );
    }

    public function products()
    {
        return $this->belongsToMany('Product', 'product_category', 'product_id', 'category_id');
    }

    public function subcategory()
    {
        return $this->hasMany('categories', 'parent_id', 'id');
    }
} 