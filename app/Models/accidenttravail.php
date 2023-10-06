<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidenttravail extends Model
{
    use HasFactory;

    protected $fillable = ['matricule','dateAccident','lieu','description','temoin','nature','descriptionBlessure','violence','comment','premierSoin','nomSecouriste','detail'];
}
