<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
     use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $books = Book::all();
//        return $this->successResponse($books);
        return $this->successResponse($books);
    }

    /**
     * @Notes: 添加数据
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];
        $this->validate($request, $rules);
        $book = Book::create($request->all());
        return $this->successResponse($book, Response::HTTP_CREATED);

    }

    /**
     * @Notes:  根据Id查询一条
     * @Interface show
     */
    public function show($book)
    {
//        $author = Author::findOrFail($author);
        $book = Book::find($book);
        return $this->successResponse($book);

    }

    public function update(Request  $request, $book)
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
//            'price' => 'min:1',
//            'author_id' => 'min:1',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];
        $this->validate($request, $rules);
        $book = Book::findOrFail($book);
        $book->fill($request->all());
        if($book->isClean()){
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $book->save();
        return $this->successResponse($book);

    }

    public function destroy($book)
    {
        $book = Book::findOrFail($book);
        $book->delete();
        return $this->successResponse($book);

    }


}
