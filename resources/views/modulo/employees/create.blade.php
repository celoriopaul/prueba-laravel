@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Crear Empleado
                </div>
                <div class="card-body">
                    <form action="{{route('empleados.store')}}" method="POST">
                        @csrf
                        @include('modulo.employees.partials.form')

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
