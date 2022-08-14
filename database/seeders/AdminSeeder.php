<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'=>1,
            'firstname'=>'KABORE',
            'lastname'=>'Ismael Yves',
            'email'=>'ismaelyveskabore@gmail.com',
            'numero'=>'77634303',
            'photo'=>'Avatar.png',
            'password'=>Hash::make('password'),

        ]);
    }
}
