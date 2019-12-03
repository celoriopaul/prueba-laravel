<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        //dd($this);
        
        return [
            
            'nombre'            => 'required',
            'apellido'          => 'required',
            'cedula'            => 'required|max:10|',
            'fecha_nacimiento'  => 'required',
            'fecha_ingreso'     => 'required',
            'sexo'              => 'required',
            'id_country'        => 'required|integer',
            'id_marital_status' => 'required|integer',
            'estado'            => 'required|in:Activo, Pasivo',

            
        ];
    }

}
