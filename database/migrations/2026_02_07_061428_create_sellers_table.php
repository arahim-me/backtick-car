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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->foreignId('status_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->json('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('website')->nullable();
            $table->json('social_media_links')->nullable();
            $table->string('registration_number')->unique()->nullable();
            $table->string('tax_number')->unique()->nullable();
            $table->string('used_cars_license_number')->unique()->nullable();
            $table->json('bank_account')->nullable();
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->json('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
