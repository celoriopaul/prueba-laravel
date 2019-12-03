<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['nombre'];
    
    
    
    public function employees(){
        
        return $this->hasMany('App\Employee');
    }
}
