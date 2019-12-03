<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_country')->unsigned();
            $table->bigInteger('id_marital_status')->unsigned();

            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->string('sexo');
            $table->enum('estado',['Activo','Pasivo'])->default('pasivo');
            $table->timestamps();



            //Relaciones
            $table->foreign('id_country')->references('id')->on('countries')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_marital_status')->references('id')->on('marital__statuses')
            ->onDelete('cascade')
            ->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
