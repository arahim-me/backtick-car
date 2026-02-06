<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->string('views')->default(0);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('model')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('years')->nullable();
            $table->string('condition')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('color')->nullable();
            $table->longText('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('status')->default('processing');
            $table->string('export_to')->default('bangladesh');
            $table->string('importer')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
