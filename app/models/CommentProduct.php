<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/24/2015
 * Time: 9:30 AM
 */

class CommentProduct extends Eloquent {

    public $table = 'comment_product';

    public $fillable = array('product_id', 'user_id', 'comment');

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }
} 