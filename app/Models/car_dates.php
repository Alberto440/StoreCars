<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_dates extends Model
{
    use HasFactory;

    //El $fillable se utiliza para que solo se puedan cambiar esos valores
    //Si alguien añade un campo e intenta hacer cambios esta protegido contra eso
    protected $fillable=['id', 'user_id','Name','img','Transmission_type', 'Year','Price','Bodywork','Fuel_type','Mileage'];
    
    //Relacion 1:N inversa de car_dates con user
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
