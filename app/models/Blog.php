<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 4/23/2015
 * Time: 3:43 PM
 */

class Blog extends Eloquent {

    protected $table = 'blog';

    protected $fillable = array('title', 'description', 'content', 'user_id', 'published', 'path');

    public  static function rules()
    {
        return array(
            'title' => 'required|max:50|min:4|unique:blog'
        );
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

} 