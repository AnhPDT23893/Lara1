<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/13/2015
 * Time: 10:15 AM
 */

class AdCustomerController extends BaseController {

    public function index()
    {
//        $searchUserForm = new SearchUserForm();
        $limit = Input::get('limit', 15);

        $customers = Customer::simplePaginate($limit);
//        $blog -> $searchUserForm->search(Input::all());

        return View::make('admin.customer.index', array(
            'customers' => $customers,
//            'searchUserForm' => $searchUserForm,
        ));
    }

    /**
     * create new block
     */
    public  function create()
    {
//        $users = array();
//        foreach(User::all() as $user)
//            $users[$user->id] = $user->name;

        return View::make('admin.customer.form');
    }

    public function store()
    {
       $validator = Validator::make($data = Input::all(), Customer::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Customer::create($data);
        $data['user_id'] = Auth::user()->id;

        return Redirect::action('AdCustomerController@index');
    }

    /**
     * show the form for editing the specifies role
     *
     * @param integer $id
     * return mixes
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return View::make('admin.customer.form', compact('customer'));
    }

    /**
     * update the sprcified resource in storage
     *
     * @param int $id
     * return Response
     */
    public function update($id)
    {
        $customer = Customer::findOfFail($id);
        $validator = Validator::make($data = Input::all(), Customer::rules());

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $customer->update($data);
        return Redirect::action('AdCustomerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.blog.delete', compact('customer'));
        } else {
            $customer->delete();
            return Redirect::action('AdCustomerController@index');
        }
    }
} 