<?php

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        // create roles
        $memberRole = new Role;
        $memberRole->name = 'Member';
        $memberRole->save();

        $adminRole = new Role;
        $adminRole->name = 'Admin';
        $adminRole->save();

        // create admin user
		$user = new User();
        $user->username = 'admin';
        $user->email = 'admin@site.com';
        $user->password = '1234567';
        $user->password_confirmation = '1234567';
        $user->confirmed = 1;
        $user->confirmation_code = md5(uniqid(mt_rand(), true));

        if (!$user->save()) {
            Log::info('Unable to create user '.$user->username, (array)$user->errors());
        } else {
            // set role
            $user->attachRole($adminRole);

            Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
        }

        
        for ($i=1; $i < 30 ; $i++) { 
            $member = new User();
            $member->username = 'User' .$i;
            $member->email = 'User' .$i. '@gmail.com';
            $member->password = '1234567';
            $member->password_confirmation = '1234567';
            $member->confirmed = 1;
            $member->confirmation_code = md5(uniqid(mt_rand(), true));

            if (!$member->save()) {
                Log::info('Unable to create user' .$member->username, (array)$member->errors());
            } else {
                //set role member
                $member->attachRole($memberRole);

                Log::info('Created user:' .$member->username. '<' .$member->email. '>');
            }
        }
	}

}
