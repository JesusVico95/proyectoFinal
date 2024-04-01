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
        Schema::create('ingredient_plates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingredient_id');
            $table -> unsignedBigInteger('title_id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('title_id')->references('id')->on('plates');
            $table->foreign('type_id')->references('id')->on('alimentations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_plates');
    }
};
