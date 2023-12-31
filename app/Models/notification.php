<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;

    protected $fillable = ['matriculeEmploye','matriculeSuperviseur','typeFormulaire','idFormulaire','verifier','verifierAdmin'];

    public function usagers(){
        return $this->belongsToMany('App\Models\User');
    }
    
}
