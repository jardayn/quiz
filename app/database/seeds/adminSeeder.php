<?php

class adminSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $password = $_ENV['adminpass'];
        $accname = $_ENV['adminacc'];
        $email = $_ENV['adminemail'];
        User::create(array('username' => "$accname",'password' => Hash::make("$password"),'access_level' => 'Admin'));

    }

}