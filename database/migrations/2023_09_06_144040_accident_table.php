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
        Schema::create('accidenttravails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matricule');
            $table->foreignId('superviseur');
            $table->dateTime('dateAccident');
            $table->text('description');
            $table->string('temoin')->nullable($value = true);
            $table->string('nature');
            $table->text('descriptionBlessure');
            $table->string('violence');
            $table->text('comment');
            $table->string('premierSoin');
            $table->string('nomSecouriste');
            $table->string('detail');
            $table->date('DateRempli');
            $table->date('dateSuperviseur');
            $table->string('lieu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidenttravails');
    }
};
