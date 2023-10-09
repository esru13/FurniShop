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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('name')->nullable();
            $table->String('email')->nullable();
            $table->String('phone')->nullable();
            $table->String('address')->nullable();
            $table->String('user_id')->nullable();

            $table->String('pro_name')->nullable();
            $table->String('pro_price')->nullable();
            $table->String('pro_quantity')->nullable();
            $table->String('pro_image')->nullable();
            $table->String('pro_id')->nullable();

            $table->String('payment_status')->nullable();
            $table->String('delivery_status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
