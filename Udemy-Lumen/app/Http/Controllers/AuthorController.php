<?php

namespace App\Http\Controllers;

use App\Author;
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
     * @Notes:
     * @Interface index
     * @return Illuminate\Http\Response
     */

    public function index()
    {
        $authors = Author::all();
//        return $authors;
        return $this->successResponse($authors);

    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male, female',
            'country' => 'required|max:255',
        ];
        $this->validate($request, $rules);
        $author = Author::create($request->all());
        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    public function show($author)
    {
        //
    }

    public function update(Request  $request, $author)
    {
        //
    }

    public function destory($author)
    {
        //
    }


}
