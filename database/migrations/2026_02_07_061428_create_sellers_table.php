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
            $table->string('store_name')->unique();
            $table->string('store_email')->unique()->nullable();
            $table->json('store_phone')->unique()->nullable();
            $table->string('store_website')->unique()->nullable();
            $table->json('store_social_media_links')->nullable();
            $table->string('store_fax')->unique()->nullable();
            $table->string('store_registration_number')->unique()->nullable();
            $table->string('store_used_cars_license_number')->unique()->nullable();
            $table->json('store_bank_account_number')->nullable();
            $table->string('store_tax_number')->unique()->nullable();
            $table->string('store_description')->nullable();
            $table->string('store_logo')->nullable();
            $table->json('store_address')->nullable();
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
