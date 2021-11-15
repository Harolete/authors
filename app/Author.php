<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Author extends Model //implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * fillable indica cuales son los atributos del modelos que pueden ser asignado de manera masiva
     * lo cuales se asignan todos a la vez llamando a un metodo llamando create
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'country'
    ];

    /**
     * hidden son los atributos que estan ocultos cuando se retorna la data en el servicio
     *
     * @var array
     */
    /*protected $hidden = [
        'password',
    ];*/
}
