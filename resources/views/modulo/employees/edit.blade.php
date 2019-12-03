@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Actualizar Empleado
                </div>
                <div class="card-body">
                    <form action="{{route('empleados.update',$employees->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('modulo.employees.partials.form')

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection