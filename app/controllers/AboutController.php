<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/19/2015
 * Time: 11:49 PM
 */

class AboutController extends BaseController {

    public function index()
    {
        return View::make('site.about.index');
    }
} 