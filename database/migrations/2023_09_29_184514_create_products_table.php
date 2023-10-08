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
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 10, 2); 
            $table->unsignedBigInteger('category_id');
            $table->string('brand'); 
            $table->string('brief'); 
            $table->integer('quantity_in_stock'); 
            $table->mediumText('image1')->nullable(); 
            $table->mediumText('image2')->nullable();
            $table->mediumText('image3')->nullable();
            $table->mediumText('image4')->nullable();
            
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');

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
