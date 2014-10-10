<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'audreyelopez@gmail.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();
    }

}