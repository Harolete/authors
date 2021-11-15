<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponder;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retorna una lista de autores
     * @return  Illuminate\Http\Response
     *
     */
    public function index()
    {

    }

    /**
     * Crea una instancia de Author
     * @param Request $request
     * @return  Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {

    }

    /**
     * Retorna un author especifico
     * @param  $author
     * @return  Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Modifica un authjor especifico
     * @param  Request $request
     * @param  $author
     * @return  Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Retorna un author especifico
     * @param  $author
     * @return  Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }
}
