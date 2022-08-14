<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=['directeur', 'secretaire'];
        foreach($roles as $role) {
            Roles::create([
            'label'=>$role,
            'created_at'=>now(),
            'updated_at'=>now(),
            ]);
        }
    }
}
