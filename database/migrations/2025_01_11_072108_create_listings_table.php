<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->enum('lang', ['ja', 'en', 'bn'])->default('en');
            $table->integer('views')->default(0);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->foreignId('model_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->string('year')->nullable();
            $table->foreignId('condition_id')->default(2);
            $table->integer('stock_number')->default(1);
            $table->integer('mileage')->nullable();
            $table->integer('transmision')->nullable();
            $table->string('driver_type')->nullable();
            $table->string('engine_size')->nullable();
            $table->string('cylinders')->nullable();
            $table->string('fuel_type')->nullable();
            $table->integer('doors')->nullable();
            $table->string('color')->nullable();
            $table->integer('seats')->nullable();
            $table->string('tyer_type', )->nullable();
            $table->integer('weight')->nullable();
            $table->integer('dimension')->nullable();
            $table->longText('description')->nullable();
            $table->longText('features_id')->nullable();
            $table->integer('price')->nullable();
            $table->string('currency')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
