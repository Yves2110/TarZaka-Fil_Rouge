<?php

namespace Database\Seeders;

use App\Models\Mois;
use Illuminate\Database\Seeder;

class MoisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $annees=['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        foreach($annees as $annee) {
            Mois::create([
            'libeller'=>$annee,

            ]);
        }
    }
}
