<?php

namespace Database\Seeders;

use App\Models\Modele;
use Illuminate\Database\Seeder;

class ModeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modeles=['Appartement', 'Celibatoruim', 'Cours unique', 'Cours commune', 'Mini villa', 'Villa', 'Suite', 'Cabane', 'Chalet'];
        foreach($modeles as $modele) {
            Modele::create([
            'type'=>$modele,

            ]);
        }
    }
}
