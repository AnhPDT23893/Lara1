<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/12/2015
 * Time: 10:24 PM
 */

class Ship extends Eloquent {

    protected $table = 'ship';

    protected $fillable = array('id', 'city', 'country', 'price');

    public  static function rules()
    {
        return array(
            'city'      => 'required|max:32|unique:ship',
            'country'      => 'required|max:32|unique:ship',
        );

    }

} 