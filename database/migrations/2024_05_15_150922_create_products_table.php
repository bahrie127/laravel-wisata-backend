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
            //description
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('stock');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('image')->nullable();
            //status string
            $table->enum('status', ['draft', 'published', 'archived'])->default('published');
            //string criteria
            $table->enum('criteria', ['perorangan', 'rombongan'])->default('perorangan');
            //favorite
            $table->boolean('favorite')->default(false);

            $table->softDeletes();

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
