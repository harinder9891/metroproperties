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
        Schema::create('apartment_configurations', function (Blueprint $table) {
            $table->id();
            $table->integer('properties_id');
            $table->string('beds')->nullable();
            $table->string('baths')->nullable();
            $table->string('cars')->nullable();
            $table->string('internal')->nullable();
            $table->string('a_price')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_configurations');
    }
};
