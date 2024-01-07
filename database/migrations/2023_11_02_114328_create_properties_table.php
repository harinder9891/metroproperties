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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('location');
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('area_sqft')->nullable();
            $table->string('lot_size_acres')->nullable();
            $table->integer('agent_id')->nullable();
            $table->string('property_status')->nullable();
            $table->tinyInteger('status')->default(0);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
