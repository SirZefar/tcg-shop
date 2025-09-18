<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description');
            $table->boolean('status');
            $table->enum('product_type', ['Booster Box', 'Elite Trainer Box', 'Booster Bundel', 'Build & Battel', 'Premium Collection', 'Special Collection' , 'Decks', 'Sobre Sueltos' , 'Tins & Minitin' , 'Blister' , 'Loncheras & Mini Album', 'Micas y Accessorios']);
            $table->decimal('selling_price', 10 , 2);
            $table->string('gallery_path' , 255);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('rarity_id')->nullable();
            $table->unsignedBigInteger('set_id');
            $table->unsignedBigInteger('condition_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('rarity_id')->references('id')->on('rarities');
            $table->foreign('set_id')->references('id')->on('set');
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
