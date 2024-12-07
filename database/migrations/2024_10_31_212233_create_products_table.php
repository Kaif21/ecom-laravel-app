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
            $table->string('code');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('unit_id');
            $table->integer('brand_id');
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('image');
            $table->text('other_image')->nullable();
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->integer('stock_amount');
            $table->integer('hit_count')->nullable();
            $table->integer('sales_count')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->tinyInteger('status');
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
