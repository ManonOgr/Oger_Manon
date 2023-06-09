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
            $table->id()->onDelete('cascade');
            $table->string('product_name');
            $table->text('product_description');
            $table->string('product_price');
            $table->string('product_picture');
            $table->enum('product_visibility',['publié', 'non publié']);
            $table->enum('product_state',['solde', 'standard']);
            $table->string('product_reference');
            $table->enum('product_category',['femme', 'homme']);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
