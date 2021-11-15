<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * La clase se crea mediante el comando php artisan make:migration CreateAuthorsTable --create=authors
 * Se modifica el Schema::create dentro de "up" en función a las columnas que necesitemos.
 * Se corre el comando phph artisan migrate que modificará el archivo "database.sqlite" con los  datos binarios de la tabla.
 *
 */
class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
