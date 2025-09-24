<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            ['name' => "Lillie's Clefairy ex", 'description' => '', 'status' => 1, 'product_type' => 'Carta', 'selling_price' => 152, 'gallery_path' => 'assets/img/cards/lilies_clefairy_ex_sir.webp' ,'category_id' => 1, 'rarity_id' => 23, 'set_id' => 32, 'condition_id' =>  1],
            ['name' => 'Flareon ex', 'description' => '', 'status' => 1, 'product_type' => 'Carta', 'selling_price' => 5.96, 'gallery_path' => 'assets/img/cards/flareon_ex.webp' ,'category_id' => 1, 'rarity_id' => 21, 'set_id' => 31, 'condition_id' =>  1],
            ['name' => 'Teal Mask Ogerpon ex', 'description' => '', 'status' => 1, 'product_type' => 'Carta', 'selling_price' => 1.16, 'gallery_path' => 'assets/img/cards/teal_mask_ogerpon_ex.webp' ,'category_id' => 1, 'rarity_id' => 21, 'set_id' => 31, 'condition_id' =>  1],
            ['name' => 'Night Stretcher', 'description' => '', 'status' => 1, 'product_type' => 'Carta', 'selling_price' => 20.98, 'gallery_path' => 'assets/img/cards/night_stretch_secret.webp' ,'category_id' => 1, 'rarity_id' => 24, 'set_id' => 30, 'condition_id' =>  1],
            ['name' => 'Latias ex', 'description' => '', 'status' => 1, 'product_type' => 'Carta', 'selling_price' => 9.82, 'gallery_path' => 'assets/img/cards/latias_ex_full_art.webp' ,'category_id' => 1, 'rarity_id' => 18, 'set_id' => 30, 'condition_id' =>  1],
        ]);

        DB::table('products')->insert([
            ['name' => 'Twilight Masquerade Booster Box', 'description' => '', 'status' => 1, 'product_type' => 'Booster Box', 'selling_price' => 246.33, 'gallery_path'=> 'assets/img/products/twiligth_masquerada_booster_box.jpg' ,'category_id' => 1, 'set_id' => 27, 'condition_id' =>  6],
            ['name' => 'Shrouded Fable Booster Bundle', 'description' => '', 'status' => 1, 'product_type' => 'Booster Bundel', 'selling_price' => 48.20, 'gallery_path'=> 'assets/img/products/shrouded_flame_bundel.jpg' ,'category_id' => 1, 'set_id' => 28, 'condition_id' =>  6],
            ['name' => 'Obsidian Flames Booster Bundle', 'description' => '', 'status' => 1, 'product_type' => 'Booster Bundel', 'selling_price' => 57.98, 'gallery_path'=> 'assets/img/products/obsidian_flame_bundel.webp' ,'category_id' => 1, 'set_id' => 22, 'condition_id' =>  6],
            ['name' => 'Temporal Forces Booster Bundle', 'description' => '', 'status' => 1, 'product_type' => 'Booster Bundel', 'selling_price' => 50.57, 'gallery_path'=> 'assets/img/products/temporal_force_bundel.webp' ,'category_id' => 1, 'set_id' => 26, 'condition_id' =>  6],
            ['name' => 'Paldean Fates Elite Trainer Box', 'description' => '', 'status' => 1, 'product_type' => 'Elite Trainer Box', 'selling_price' => 289.08, 'gallery_path'=> 'assets/img/products/etb_paldean_fates.webp' ,'category_id' => 1, 'set_id' => 25, 'condition_id' =>  6],
            ['name' => 'Scarlet & Violet Elite Trainer Box [Koraidon]', 'description' => '', 'status' => 1, 'product_type' => 'Elite Trainer Box', 'selling_price' => 76.99, 'gallery_path'=> 'assets/img/products/etb_s&v_koraidon.jpg' ,'category_id' => 1, 'set_id' => 20, 'condition_id' =>  6],
        ]);
    }
}
