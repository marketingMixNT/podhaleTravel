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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->json('name')->unique();
            $table->json('slug')->unique();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->text('google_maps_link')->nullable();
            $table->text('google_maps_frame')->nullable();
            $table->json('short_desc');
            $table->json('desc');
            $table->text('thumbnail');
            $table->text('gallery');
            $table->text('address');
            $table->text('site_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('featured');
            $table->integer('order')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('city_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
