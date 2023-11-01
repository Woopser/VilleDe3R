<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','superviseur','lieu','date','EPI','tenueLieux','comportement','signalisation','ficheSignaletique','travaux','espaceClos','methode','autres','descAutre','distanciation','portMasque','respectProcedure','descriptionTravail','dateSuperviseur'];
    
}
