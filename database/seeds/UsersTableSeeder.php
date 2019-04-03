<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@hstl.net',
            'password' => bcrypt('hstladmin'),
            'remember_token' => md5(Carbon::now() . rand(1000, 9999)),
            'role' => 1,
        ]);
    }
}
