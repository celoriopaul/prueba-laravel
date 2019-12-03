<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marital_Status extends Model
{
    protected $fillable = ['nombre'];


    public function employees(){
        return $this->hasMany('App\Employee');
    }
}
