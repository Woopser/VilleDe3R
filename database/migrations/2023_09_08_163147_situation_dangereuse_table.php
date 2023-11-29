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
        Schema::create('situations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur')->nullable($value = true);
            $table->string('fonction');
            $table->string('secteur');
            $table->dateTime('dateObservation');
            $table->string('temoin')->nullable($value = true);
            $table->string('lieu');
            $table->text('description');
            $table->text('correction');
            $table->date('dateRempli');
            $table->date('dateSuperviseur')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situations');
    }
};
