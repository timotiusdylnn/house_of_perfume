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
            $table->string('Image')->nullable();
            $table->string('Name')->nullable();
            $table->string('Brand')->nullable();
            $table->string('Price')->nullable();
            $table->longText('Description')->nullable();
            $table->longText('Notes Description')->nullable();
            $table->longText('Ingredients')->nullable();
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
