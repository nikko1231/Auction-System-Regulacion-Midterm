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
        Schema::create('car_bidders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bidder_id')->unsigned();
            $table->bigInteger('car_id')->unsigned();
            $table->timestamps();

            $table->foreign('bidder_id')->references('id')->on('bidders');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_bidders');
    }
};
