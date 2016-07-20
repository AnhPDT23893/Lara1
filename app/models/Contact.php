<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 9:17 AM
 */

class Contact extends Eloquent {

    protected $table = 'contacts';

    protected $fillable = array('comments', 'customer_id');

    public static function rules()
    {
        return array();
    }

    public function customer()
    {
        return $this->belongsTo('Customer', 'customer_id');
    }
} 