<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role'  =>  'admin',
            'name'  =>  'Yuga Kurniawan',
            'email' =>  'it@mahaghora.co.id',
            'password' =>  bcrypt('password'),
            'remember_token' =>  Str::random(10)
        ]);
    }
}
