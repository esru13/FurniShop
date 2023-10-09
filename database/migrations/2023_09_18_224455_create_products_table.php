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
            $table->timestamps();
            $table->string('pro_name')->nullable();
            $table->string('pro_quantity')->nullable();
            $table->string('pro_price')->nullable();
            $table->string('pro_desc')->nullable();
            $table->string('pro_image')->nullable();
            $table->string('pro_catagory')->nullable();
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
