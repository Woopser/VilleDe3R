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
        Schema::create('grilleAudits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur')->nullable($value = true);
            $table->string('lieu');
            $table->dateTime('date');
            $table->string('EPI');
            $table->string('tenueLieux');
            $table->string('comportement');
            $table->string('signalisation');
            $table->string('ficheSignaletique');
            $table->string('travaux');
            $table->string('espaceClos');
            $table->string('methode');
            $table->string('autres');
            $table->string('distanciation');
            $table->string('portMasque');
            $table->string('respectProcedure');
            $table->string('descriptionTravail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grilleAudits');
    }
};
