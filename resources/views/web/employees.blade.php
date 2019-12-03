@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8 offset-md-3">
        <h1>Lista de Empleados</h1>
        
        @foreach ($employees as $emplo)
        <div class="card">
            <h5 class="card-header">{{ $emplo->nombre}}</h5>
            <div class="card-body">
                <ul class="list-group list-group-flush">

                    <p class="card-text">Nombre: {{$emplo->nombre}}</p>
                    <p class="card-text">Apellido: {{$emplo->apellido}}</p>
                    <p class="card-text">Cedula: {{$emplo->cedula}}</p>
                    <p class="card-text">Sexo: {{$emplo->sexo}}</p>
                    <p class="card-text">Pais: {{$emplo->country->nombre}}</p>

                    
                    <p class="card-text">Estado Civil:  {{$emplo->marital_statuses->nombre}}</p>
                    <p class="card-text">Fecha de Nacimiento: {{$emplo->fecha_nacimiento}}</p>
                    <p class="card-text">Fecha de Ingreso:  {{$emplo->fecha_ingreso}}</p>
                    

                    
                    <li class="list-group-item">Estado: {{$emplo->estado}}</li>



                </ul>

            </div>
        </div>
        <br>
        @endforeach

        
        {{$employees->render()}}

    </div>
</div>

@endsection