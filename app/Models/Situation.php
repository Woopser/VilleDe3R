<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    use HasFactory;
    protected $fillable = ['matricule', 'superviseur','fonction','secteur','dateObservation','temoin','lieu','description','correction','dateRempli','dateSuperviseur'];
}
