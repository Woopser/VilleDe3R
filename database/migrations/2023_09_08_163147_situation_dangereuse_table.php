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
        Schema::create('situation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur');
            $table->string('fonction');
            $table->string('secteur');
            $table->dateTime('dateObservation');
            $table->string('temoin');
            $table->string('lieu');
            $table->text('description');
            $table->text('correction');
            $table->date('dateRempli');
            $table->date('dateSuperviseur');
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
