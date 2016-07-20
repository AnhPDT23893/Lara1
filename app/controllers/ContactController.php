<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/20/2015
 * Time: 12:32 AM
 */

class ContactController extends BaseController {

    public function  index()
    {
        return View::make('site.contact.index');
    }

    public function store()
    {
        $data = Input::all();
        $customer = Customer::create([
           'last_name' => $data['last_name'],
           'email' => $data['email'],
        ]);

        $contact = Contact::create([
           'customer_id' => $customer->id,
            'comments' => $data['comments'],
        ]);

        return View::make('site.contact.success');
    }

} 