<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 3/1/2015
 * Time: 8:17 PM
 */

class AdPostController extends BaseController{
    public function create(){
        return View::make('admin.post.form');
    }
}