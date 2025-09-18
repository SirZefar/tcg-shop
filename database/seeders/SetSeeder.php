<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Set::factory(10)->create();
        DB::table('set')->insert([
            ['set' => 'Lost Origin', 'release_date' => '2022-09-09' , 'abbreviation' => 'LOR'],
            ['set' => 'Silver Tempest', 'release_date' => '2022-11-11' , 'abbreviation' => 'SIT'],
            ['set' => 'Crown Zenith', 'release_date' => '2023-01-20' , 'abbreviation' => 'CRZ'],
            ['set' => 'Scarlet & Violet', 'release_date' => '2023-03-31' , 'abbreviation' => 'SVI'],
            ['set' => 'Paldea Evolved', 'release_date' => '2023-06-09' , 'abbreviation' => 'PAL'],
            ['set' => 'Obsidian Flames', 'release_date' => '2023-08-11' , 'abbreviation' => 'OBF'],
            ['set' => '151', 'release_date' => '2023-09-22' , 'abbreviation' => 'MEW'],
            ['set' => 'Paradox Rift', 'release_date' => '2023-11-03' , 'abbreviation' => 'PAR'],
            ['set' => 'Paldean Fates', 'release_date' => '2024-01-26' , 'abbreviation' => 'PAF'],
            ['set' => 'Temporal Forces', 'release_date' => '2024-03-22' , 'abbreviation' => 'TEF'],
            ['set' => 'Twilight Masquerade', 'release_date' => '2024-05-2024' , 'abbreviation' => 'TWM'],
            ['set' => 'Shrouded Fable', 'release_date' => '2024-08-02' , 'abbreviation' => 'SFA'],
            ['set' => 'Stellar Crown', 'release_date' => '2024-09-13' , 'abbreviation' => 'SCR'],
            ['set' => 'Surging Sparks', 'release_date' => '2024-11-08' , 'abbreviation' => 'SSP'],
            ['set' => 'Prismatic Evolutions', 'release_date' => '2025-01-17' , 'abbreviation' => 'PRE'],
            ['set' => 'Journey Together', 'release_date' => '2025-03-28' , 'abbreviation' => 'JTG'],
        ]);
    }
}
