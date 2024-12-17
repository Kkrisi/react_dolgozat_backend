<?php

namespace Database\Seeders;

use App\Models\szakdoga;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        //szakdoga::factory(10)->create();

        
        szakdoga::factory()->create([
            'szakdoga_nev' => 'Atlantis Mozi',
            'githublink' => 'https://github.com/Atlantis#Szakdolgozat',
            'oldallink' => '- weboldal',
            'tagokneve' => 'Váradi Ákos, Szikora Melinda, Szabó Anett'
        ]);

        szakdoga::factory()->create([
            'szakdoga_nev' => 'Autokolcsonzo',
            'githublink' => 'https://github.com/Autkokol#',
            'oldallink' => '- weboldal',
            'tagokneve' => 'Hecz Klaudia, Illés Leila, Ménesi Csaba'
        ]);

        szakdoga::factory()->create([
            'szakdoga_nev' => 'Bika Edzőterem',
            'githublink' => 'https://github.com/bikaEdz#',
            'oldallink' => '- weboldal',
            'tagokneve' => 'Gutyina András, Szűcs Richárd, Bogdán Gábor'
        ]);

        szakdoga::factory()->create([
            'szakdoga_nev' => 'Gyorsetterem',
            'githublink' => 'https://github.com/gyorsEtterem#',
            'oldallink' => '- weboldal',
            'tagokneve' => 'Kis Grofo, Kkevin, Herceg Csaba'
        ]);
        
    }
}
