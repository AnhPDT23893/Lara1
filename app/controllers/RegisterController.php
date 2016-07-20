<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 6/9/2015
 * Time: 10:18 PM
 */

class RegisterController extends BaseController {

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {

        return View::make('site.user.success');
    }

    /**
     * Create user
     *
     * @return mixed
     */
    public function create()
    {
        return View::make('admin.user.form');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $validator = Validator::make($data, User::$rules['create']);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user =  new User([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password_confirmation' => $data['password_confirmation'],
            'confirmed' => '1',
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
        ]);

            $user->roles()->sync([1]);

        Customer::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_id' => $user->id,
            'email' => $user->email,
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
//        dd($data);
        // Send mail after create new user
        if (false) {
            Mail::queueOn(
                Config::get('confide::email_queue'),
                Config::get('confide::email_account_confirmation'),
                compact('user'),
                function ($message) use ($user) {
                    $message
                        ->to($user->email, $user->username)
                        ->subject(trans('admin_user.email.account_confirmation.subject'));
                }
            );
        }

        return Redirect::action('site.user.success');
    }

    /**
     * Edit user
     *
     * @param integer $id
     * @return mixed
     */
    public function edit($id)
    {
        $user = User::all()->find($id);


        return View::make('admin.user.form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
//    public function update($id)
//    {
//        $user = User::findOrFail($id);
//        $validator = Validator::make($data = Input::all(), User::$rules['update']);
//
//        if ($validator->fails()) {
//            return Redirect::back()->withErrors($validator)->withInput();
//        }
//
//        $data['confirmed'] = Input::get('confirmed') ? 1 : 0;
//        $user->update($data);
////        $user->roles()->sync(Input::get('roles'));
//
//        return Redirect::action('AdUsersController@index');
//    }

} 