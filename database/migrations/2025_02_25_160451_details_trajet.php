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
        Schema::create('detailetrajets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_trajet');
            $table->numericMorphs('order_id');
            $table->string('point_de_pause');
            $table->foreign('id_trajet')->references('id')->on('trajets')->onDelete('cascade');
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
