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
        Schema::create('formulaire', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateAccident');
            $table->text('description');
            $table->string('temoin')->nullable($value = true);
            $table->string('nature');
            $table->text('descriptionBlessure');
            $table->string('violence');
            $table->
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
