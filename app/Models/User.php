<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    use Auth;


    protected $fillable = [
        'matricule',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    
}
