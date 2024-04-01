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
        Schema::create('buy_lists', function (Blueprint $table) {
            $table->id();
           
            $table -> unsignedBigInteger('ingredient_id')->nullable();
            $table -> unsignedBigInteger('user_id')->nullable();
            $table -> integer('quantity');

            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->foreign('user_id')->references('id')->on('users');
            
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_lists');
    }
};
