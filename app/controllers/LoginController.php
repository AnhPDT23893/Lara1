<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 6/3/2015
 * Time: 6:50 AM
 */

class LoginController extends BaseController{

    public function show($id)
    {
        $user = User::find($id);

        return View::make('site.user.profile', array(
            'user' => $user,
        ));
    }
    public function index()
    {
        return View::make('site.home.content.index');
    }
    public function login()
    {
        return View::make('site.user.login');
    }

    /**
     * Login action
     *
     * @return string
     */
    public function doLogin()
    {
        $repo = App::make('UserRepository');
        $input = Input::all();

        if ($repo->login($input, true)) {
            return Redirect::action('HomeController@index');
        } else {
            if ($repo->isThrottled($input)) {
                $err_msg = trans('user.alerts.too_many_attempts');
            } elseif ($repo->existsButNotConfirmed($input)) {
                $err_msg = trans('user.alerts.not_confirmed');
            } else {
                $err_msg = trans('user.alerts.wrong_credentials');
            }

            return Redirect::action('LoginController@login')
                ->withInput(Input::except('password'))
                ->with('error', $err_msg);
        }
    }

    /**
     * Logout
     *
     * @return mixed
     */
    public function logout()
    {
        Confide::logout();
        return Redirect::action('LoginController@index');
    }
} 