<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Robin Drost',
            'email' => 'robin.drost@oneshoe.nl',
            'password' => bcrypt('password'),
        ]);
    }
}
