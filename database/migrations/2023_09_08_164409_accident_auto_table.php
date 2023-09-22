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
        Schema::create('accidentautos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur')->nullable($value = true);
            $table->string('numeroUnite');
            $table->foreignId('departement');
            //$table->string('nomEmployeImpliquer');
            $table->foreignId('employeImpliquer');
            $table->foreignId('superviseurImpliquer');
            $table->string('numeroDePermis');
            $table->boolean('autreVehicule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidentautos');
    }
};
