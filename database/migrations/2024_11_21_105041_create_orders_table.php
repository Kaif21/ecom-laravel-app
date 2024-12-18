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
            $table->integer('customer_id');
            $table->integer('order_date');
            $table->integer('order_timestamp');
            $table->integer('order_status')->default('pending');
            $table->integer('order_total');
            $table->integer('tax_total');
            $table->integer('shipping_total');
            $table->text('delivery_address');
            $table->text('delivery_date')->nullable();
            $table->text('delivery_status')->default('pending');
            $table->text('delivery_timestamp')->nullable();
            $table->text('');
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
