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
     */

    public function index()
    {
        $authors = Author::all();
//        return $authors;
        return $this->successResponse($authors);

    }

    /**
     * @Notes: 添加数据 female之前有space 报错
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];
        $this->validate($request, $rules);
        $author = Author::create($request->all());
        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * @Notes:  根据Id查询一条
     * @Interface show
     */
    public function show($author)
    {
//        $author = Author::findOrFail($author);
        $author = Author::find($author);
        return $this->successResponse($author);
    }

    public function update(Request  $request, $author)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male, female',
            'country' => 'max:255',
        ];
        $this->validate($request, $rules);
        $author = Author::findOrFail($author);
        $author->fill($request->all());
        if($author->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $author->save();
        return $this->successResponse($author);
    }

    public function destroy($author)
    {
        $author = Author::findOrFail($author);
        $author->delete();
        return $this->successResponse($author);
    }


}
