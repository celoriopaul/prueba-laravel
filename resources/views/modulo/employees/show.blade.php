@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                     Empleado
                </div>
                <div class="card-body">
                        <ul class="list-group list-group-flush">

                                <p class="card-text">Nombre: {{$emplo->nombre}}</p>
                                <p class="card-text">Apellido: {{$emplo->apellido}}</p>
                                <p class="card-text">Cedula: {{$emplo->cedula}}</p>
                                <p class="card-text">Sexo: {{$emplo->sexo}}</p>
                                <p class="card-text">Pais: {{$emplo->country->nombre}}</p>
            
                                
                                <p class="card-text">Estado Civil {{$emplo->marital_statuses->nombre}}</p>
                                <p class="card-text">Fecha de Nacimiento: {{$emplo->fecha_nacimiento}}</p>
                                <p class="card-text">Fecha de Ingreso {{$emplo->fecha_ingreso}}</p>
                                
            
                                
                                <li class="list-group-item">Estado: {{$emplo->estado}}</li>
            
            
            
                            </ul>
            
                
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
