<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/23/2015
 * Time: 8:54 AM
 */
class FormProduct
{
    public $name_product;
    public $size;
    public $color;
    public $status;
    public $category;

    public static function getSizeSelect()
    {
//        $product = Product::with('category');
//        $product->size = json_decode($product->size);
        return array(
            'all'   => 'Select all size',
            'XXL'       =>  'XXL',
            'XL'       =>  'XL',
            'L'       =>  'L',
            'M'       =>  'M',
            'S'      =>  'S',
        );
    }

    public static function getColorSelect()
    {
        return array(
            'all'   => 'Select all color',
            1       =>  'Blue',
            2       =>  'Orange',
            3       =>  'Red',
            4       =>  'Pink',
            5       =>  'White',
        );
    }

    public static function getStatusSelect()
    {
        return array(
            'all'   => 'Select all status',
            1       =>  'Availability',
            2       =>  'Not Availability',
        );
    }

    public static function getCategorySelect()
    {
        $result = array('all' => 'Select Category');
        $categories = Categories::all();

        foreach ($categories as $category) {
            $result[$category['id']] = $category['name'];
        }

        return $result;
    }

    public function search($input = array())
    {
        $this->name_product      = array_get($input, 'name_product', null);
        $this->size              = array_get($input, 'size', 'all');
        $this->color             = array_get($input, 'color', 'all');
        $this->status            = array_get($input, 'status', 'all');
        $this->category          = array_get($input, 'category', 'all');

        $products = Product::with('category');

        if ($this->name_product) {

            $products->where(function ($query) {
                $query->where('name_product', 'LIKE', '%' .$this->name_product . '%');
            });
        }
        if ($this->size != 'all') {
            $products->where(function ($query) {
                $query->where('size', $this->size);

            });

        }

        if ($this->color != 'all') {
            $products->where(function ($query) {
                $query->where('color', $this->color);
            });
        }
        if ($this->status != 'all') {
            $products->where(function ($query) {
                $query->where('status', $this->status);
            });
        }

        if ($this->category != 'all') {
            $products->whereHas('category', function($query) {
                if (is_array($this->category)) {
                    $query->whereIn('category_id', $this->category);
                } else {
                    $query->where('category_id', $this->category);
                }
            });
        }

        return $products;
    }
}