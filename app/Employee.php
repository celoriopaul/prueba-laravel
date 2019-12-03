<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=[
        'id_country',
        'id_marital_status',
        'nombre',
        'apellido',
        'cedula',
        'fecha_nacimiento',
        'fecha_ingreso',
        'sexo',
        'estado',
    ];

    public function country(){
        
        return $this->belongsTo('App\Country', 'id_country');
    }
    
    public function marital_statuses(){
        
        return $this->belongsTo('App\Marital_Status', 'id_marital_status');
    }

}
