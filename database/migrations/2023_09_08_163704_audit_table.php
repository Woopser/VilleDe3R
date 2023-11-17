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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur')->nullable($value = true);
            $table->string('lieu');
            $table->dateTime('date');
            $table->float('EPI');
            $table->float('tenueLieux');
            $table->float('comportement');
            $table->float('signalisation');
            $table->float('ficheSignaletique');
            $table->float('travaux');
            $table->float('espaceClos');
            $table->float('methode');
            $table->float('autres');
            $table->string('descAutre')->default('N/A');
            $table->float('distanciation');
            $table->float('portMasque');
            $table->float('respectProcedure');
            $table->string('descriptionTravail');
            $table->date('dateSuperviseur')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};
