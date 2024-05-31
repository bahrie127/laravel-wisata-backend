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
            //transaction_time
            $table->timestamp('transaction_time');
            //total_price
            $table->integer('total_price');
            //total_item
            $table->integer('total_item');
            //payment_amount
            $table->integer('payment_amount');
            //cashier_id
            $table->foreignId('cashier_id')->constrained('users');
            //cashier_name
            $table->string('cashier_name');
            //payment_method string
            $table->string('payment_method');

            $table->timestamps();
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
