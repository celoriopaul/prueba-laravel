@if ( !empty ( $employees) )
<div class="form-group">
    <label for="name">Nombre: </label>
    <input type="text" class="form-control" id="name" name="nombre" value="{{$employees->nombre}}">
</div>
<div class="form-group">
    <label for="name">Apellido: </label>
    <input type="text" class="form-control" id="apellido" name="apellido" value="{{$employees->apellido}}">
</div>
<div class="form-group">
    <label for="name">Cedula: </label>
    <input type="text" class="form-control" id="name" name="cedula" value="{{$employees->cedula}}">
</div>

<div class="form-group">
    <label for="name">Fecha_ nac: </label>
    <input type="date" class="form-control" id="fecha_na" name="fecha_nacimiento"
        value="{{$employees->fecha_nacimiento}}">
</div>


<div class="form-group">
    <label for="name">Fecha_ ing: </label>
    <input type="date" class="form-control" id="fecha_in" name="fecha_ingreso" value="{{$employees->fecha_ingreso}}">
</div>

<div class="form-group">
    <label for="sexo">Sexo</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="sexo">Sexo</label>
        </div>
        <select class="custom-select" id="sexo" name="sexo">
            <option selected>{{$employees->sexo}}</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>

        </select>
    </div>
</div>


<div class="form-group">
    <label for="pais">Pais</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Pais</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="id_country">
            <option value= "{{$employees->country->id}}" selected>{{$employees->country->nombre}}</option>
            @foreach ($country as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group">
    <label for="Estadocivil">Estado Civil</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Estadocivil</label>
        </div>
        <select class="custom-select" id="inputGroupSelect02" name="id_marital_status">
        <option selected value="{{$employees->marital_statuses->id}}">{{$employees->marital_statuses->nombre}}</option>
            @foreach ($marital as $estadoc)
            <option value="{{$estadoc->id}}">{{$estadoc->nombre}}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="estado">Estado</label>
        </div>
        <select class="custom-select" id="estado" name="estado">
                <option selected>{{$employees->estado}}</option>
            <option value="Activo">Activo</option>
            <option value="Pasivo">Pasivo</option>

        </select>
    </div>
</div>

<div class="form-group">
    <!-- <input class="btn btn-sm btn-primary" type="submit" value="enviar" /> -->
    <button type="submit" class="btn btn-sm btn-primary">guardar</button>
</div>


@else

<div class="form-group">
    <label for="name">Nombre: </label>
    <input type="text" class="form-control" id="name" name="nombre">
</div>
<div class="form-group">
    <label for="name">Apellido: </label>
    <input type="text" class="form-control" id="apellido" name="apellido">
</div>
<div class="form-group">
    <label for="name">Cedula: </label>
    <input type="text" class="form-control" id="name" name="cedula">
</div>

<div class="form-group">
    <label for="name">Fecha_ nac: </label>
    <input type="date" class="form-control" id="fecha_na" name="fecha_nacimiento">
</div>


<div class="form-group">
    <label for="name">Fecha_ ing: </label>
    <input type="date" class="form-control" id="fecha_in" name="fecha_ingreso">
</div>

<div class="form-group">
    <label for="sexo">Sexo</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="sexo">Sexo</label>
        </div>
        <select class="custom-select" id="sexo" name="sexo">
            <option selected>Selecionar..</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>

        </select>
    </div>
</div>


<div class="form-group">
    <label for="pais">Pais</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Pais</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="id_country">
            @foreach ($country as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group">
    <label for="Estadocivil">Estado Civil</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Estadocivil</label>
        </div>
        <select class="custom-select" id="inputGroupSelect02" name="id_marital_status">
            @foreach ($marital as $estadoc)
            <option value="{{$estadoc->id}}">{{$estadoc->nombre}}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="estado">Estado</label>
        </div>
        <select class="custom-select" id="estado" name="estado">
            <option selected>Selecionar..</option>
            <option value="Activo">Activo</option>
            <option value="Pasivo">Pasivo</option>

        </select>
    </div>
</div>


<div class="form-group">
    <!-- <input class="btn btn-sm btn-primary" type="submit" value="enviar" /> -->
    <button type="submit" class="btn btn-sm btn-primary">guardar</button>
</div>



@endif
