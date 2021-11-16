<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponder;
use Illuminate\Http\JsonResponse;
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
     * @return JsonResponse
     */
    public function index()
    {
        return $this->successResponse(Author::all());
    }

    /**
     * Crea una instancia de Author
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $rules = [
            'name'=>'required|max:255',
            'gender'=>'required|max:255|in:male,female',
            'country'=>'required|max:255'
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);

    }

    /**
     * Retorna un author especifico
     * @param  $author
     * @return lluminate\Http\Response
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
