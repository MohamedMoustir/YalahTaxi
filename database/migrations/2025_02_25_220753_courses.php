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
        schema::create('courses',function(Blueprint $table){
          $table->id();
          $table->unsignedBigInteger('id_driver');
          $table->unsignedBigInteger('id_trajet');
          $table->foreign('id_driver')->on('drivers')->references('id')->onDelete('cascade');
          $table->foreign('id_trajet')->on('trajets')->references('id')->onDelete('cascade');
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
