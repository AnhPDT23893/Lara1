<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 9:23 AM
 */

class AdContactController extends BaseController {

    public function index()
    {
        $limit = Input::get('limit', 15);

        $contacts = Contact::simplePaginate($limit);

        return View::make('admin.contact.index', array(
            'contacts' => $contacts,
        ));
    }

    /**
     * create new block
     */
    public  function create()
    {
        $customers = array();
        foreach(Customer::all() as $customer)
            $customers[$customer->id] = $customer->name;

        return View::make('admin.contact.form', compact('customers'));
    }

    public function store()
    {
        $validator = Validator::make($data = Input::all(), Contact::rules());

        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput();
        }

         Contact::create($data);

        return Redirect::action('AdContactController@index');
    }


    /**
     * update the sprcified resource in storage
     *
     * @param int $id
     * return Response
     */
    public function update($id)
    {
        $contact = Contact::findOfFail($id);
        $validator = Validator::make($data = Input::all(), Contact::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $contact->update($data);
        return Redirect::action('AdContactController');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.contact.delete', compact('contact'));
        } else {
            $contact->delete();
            return Redirect::action('AdContactController@index');
        }
    }
} 