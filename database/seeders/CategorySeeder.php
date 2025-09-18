<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'category' => 'Pokémon TCG',
                'abbreviation' => 'PKM',
            ],
            [
                'category' => 'YU-GI-OH',
                'abbreviation' => 'YGO',
            ],
            [
                'category' => 'Digimon TCG',
                'abbreviation' => 'DG',
            ],
        ]);
    }
}
