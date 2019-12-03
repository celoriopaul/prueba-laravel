<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Employee;

use App\Country;

class PageController extends Controller
{
    public function emp(){
        
        
        $employees = Employee::orderBy('id','DESC')->where('estado','Activo')->paginate(5);
        return view('web.employees', compact('employees'));
    }


    

    

    
    
        
}
