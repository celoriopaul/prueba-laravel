@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Listado de todos los empleados
                    <a href="{{route('empleados.create')}}" class="btn btn-primary btn-sm  float-right" role="button">
                        crear
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Edad</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employ as $em)
                            <tr>
                                <td>{{$em->id}}</td>
                                <td>{{$em->nombre}} {{$em->apellido}}</td>
                                <td>{{$em->estado}}</td>
                                <td>Edad</td>
                                <td width="10px">
                                    <a href="{{route('empleados.show',$em->id)}}" class="btn btn-sm btn-primary">ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('empleados.edit',$em->id)}}"
                                        class="btn btn-sm btn-primary">editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('empleados.destroy',$em->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-sm btn-danger" type="submit" value="Borrar" />
                                        </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{ $employ->render() }}

                </div>
            </div>

        </div>
    </div>
</div>


@endsection