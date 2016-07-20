<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/24/2015
 * Time: 10:48 AM
 */

class CommentBlog extends Eloquen {

    public $table = 'comment_blog';

    public $fillable = array('user_id', 'blog_id', 'comment');

    public  function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public  function blog()
    {
        return $this->belongsTo('Blog', 'blog_id');
    }
} 