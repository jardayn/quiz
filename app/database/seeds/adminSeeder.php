<?php

class adminSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $password = $_ENV['adminpass'];
        $accname = $_ENV['adminacc'];
        $email = $_ENV['adminemail'];
        User::create(array('email' => "$email",'username' => "$accname",'password' => Hash::make("$password"),'acc_type' => 'TheAlmighty'));

    }

}