<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Country;
use App\Marital_Status;
use App\Employee;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employ = Employee::orderBy('id','DESC')->paginate();

        

        return view('modulo.employees.index', compact('employ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::orderBy('nombre','ASC')->get();

        $marital= Marital_Status::orderBy('nombre','ASC')->get();

        

        return view('modulo.employees.create',compact('country','marital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        $employe = Employee::create($request->all());
        
        return redirect()->route('empleados.edit', $employe->id)
        ->with('info','Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emplo= Employee::find($id);

        return view('modulo.employees.show', compact('emplo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::orderBy('nombre','ASC')->get();
        $marital= Marital_Status::orderBy('nombre','ASC')->get();

        $employees= Employee::find($id);
        

        return view('modulo.employees.edit',compact('country','marital','employees'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        $empleado = Employee::find($id);
        
        $empleado->fill($request->all())->save();


        return redirect()->route('empleados.edit', $empleado->id)->with('info', 'Categoria actualizada con éxito');
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employ = Employee::findOrFail($id)->delete();

        return back()->with('info', 'eliminado Correctamente');
    }
}