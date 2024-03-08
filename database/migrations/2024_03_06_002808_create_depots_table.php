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
        Schema::create('depots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_emetteur');
            $table->string('nom_recepteur');
            $table->string('matricule');
            $table->integer('telephone');
            $table->string('bl_no');
            $table->integer('montant');
            $table->date('date_depot');
            $table->text('motif');
            $table->string('somme');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depots');
    }
};
