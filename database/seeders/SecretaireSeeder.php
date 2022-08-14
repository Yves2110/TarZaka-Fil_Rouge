<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SecretaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 2,
            'firstname' => 'Sorgho',
            'lastname' => 'Oumou',
            'email' => 'oumou@gmail.com',
            'numero' => '77001122',
            'photo' => 'Avatar.png',
            'password' => Hash::make('123456'),

        ]);
    }
}
