<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidentauto extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'superviseur', 'numeroUnite', 'departement', 'employeImpliquer', 'numeroDePermis', 'autreVehicule', 'dateSuperviseur'];
}
