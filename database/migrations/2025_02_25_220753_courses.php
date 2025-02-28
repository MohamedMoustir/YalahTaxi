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
          $table->unsignedBigInteger('trajet_id');
          $table->foreign('id_driver')->on('driveers')->references('id')->onDelete('cascade');
          $table->foreign('trajet_id')->on('trajets')->references('id')->onDelete('cascade');
          $table->enum('statut',['allez','retour'])->default('allez');
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
