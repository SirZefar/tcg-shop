<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('rarities')->insert([
            ['rarity' => 'Común', 'abbreviation' => ''],
            ['rarity' => 'Infrecuente', 'abbreviation' => ''],
            ['rarity' => 'Rara', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo', 'abbreviation' => ''],
            ['rarity' => 'Rara Luminosa', 'abbreviation' => ''],
            ['rarity' => 'Shining Holo', 'abbreviation' => ''],
            ['rarity' => 'Rara Ultra', 'abbreviation' => ''],
            ['rarity' => 'Rara Secreta', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo Variocolor', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo EX', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo Niv.X', 'abbreviation' => ''],
            ['rarity' => 'Rara Prime', 'abbreviation' => ''],
            ['rarity' => 'Rara LEYENDA', 'abbreviation' => ''],
            ['rarity' => 'Rara ACE', 'abbreviation' => ''],
            ['rarity' => 'Rara GX', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo V', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo VMAX', 'abbreviation' => ''],
            ['rarity' => 'Rara Increíble', 'abbreviation' => ''],
            ['rarity' => 'Rara Holo V-ASTRO	', 'abbreviation' => ''],
            ['rarity' => 'Rara Radiante	', 'abbreviation' => ''],
            ['rarity' => 'Rara Doble', 'abbreviation' => ''],
            ['rarity' => 'Rara Ilustración', 'abbreviation' => ''],
            ['rarity' => 'Rara Ilustración Especial', 'abbreviation' => ''],
            ['rarity' => 'Rara Híper', 'abbreviation' => ''],
            ['rarity' => 'Rara AS TÁCTICO', 'abbreviation' => ''],
            ['rarity' => 'Promo', 'abbreviation' => ''],
        ]);
    }
}
