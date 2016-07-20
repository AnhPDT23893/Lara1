<?php

class ProfileController extends BaseController {

	public function index()
	{

	}

    public function show($id)
    {
        $user = User::find($id);

        return View::make('site.user.profile', array(
                'user' => $user,
        ));
    }


}
