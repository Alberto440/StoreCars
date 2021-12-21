<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    { //Relacion muchos a muchos
        return $this->belongsToMany('App\Models\User');
    }
}
