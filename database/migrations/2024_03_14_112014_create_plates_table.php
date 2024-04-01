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
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('title_name');
            $table->text('elaboration');
            $table ->unsignedBigInteger('season_id')->nullable();
            $table->integer('time_elaboration');
            $table->text('photo')->nullable();
            $table->unsignedBigInteger('type_aliment')->nullable();
            $table->timestamps();
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('type_aliment')->references('id')->on('alimentations');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plates');
    }
};
