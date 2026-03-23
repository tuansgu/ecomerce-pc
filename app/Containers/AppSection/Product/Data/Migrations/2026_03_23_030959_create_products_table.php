<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('stock')->default(0);
            $table->integer('price')->defailt(0);
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->foreignId('type_id')->constrained('types')->cascadeOnDelete();
            $table->foreignId('category_product_id')->constrained('category_products')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
