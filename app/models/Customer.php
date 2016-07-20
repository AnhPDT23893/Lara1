<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 9:26 AM
 */

class Customer extends Eloquent {

    public $timestamps = 'false';

    protected $table = 'customers';

    protected $fillable = array('first_name', 'last_name', 'email' , 'user_id','address', 'age', 'phone');

    public static function rules()
    {
        return array(
            'fist_name' => 'required|max:16|min:2',
            'last_name' => 'required|max:16|min:2',
            'email'     => 'required|email|unique:customer',
        );
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
} 