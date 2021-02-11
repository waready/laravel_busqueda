<?php

use App\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"admin",
            'email'=>"admin@gmail.com",
            'password'=>bcrypt('admin'),
        ]);
        User::create([
            'name'=>"custom",
            'email'=>"custom@gmail.com",
            'password'=>bcrypt('custom'),
        ]);
    }
}
