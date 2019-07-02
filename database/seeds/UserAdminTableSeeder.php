<?php

use Illuminate\Database\Seeder;

class UserAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'nama'  => "ariadi ahmad",
            'email' => "ariadiahmad@gmail.com",
            'role'  => "Super Admin",
            'password'  => bcrypt('secret')
    ]);
    }
}
