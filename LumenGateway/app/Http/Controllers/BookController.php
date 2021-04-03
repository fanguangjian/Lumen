<?php

namespace App\Http\Controllers;

use App\Book;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use App\Services\AuthorService;


class BookController extends Controller
{
     use ApiResponser;
     public $bookService;
    public $authorService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    public function index()
    {
//        $books = Book::all();
////        return $this->successResponse($books);
//        return $this->successResponse($books);
        return $this->successResponse(
            $this->bookService->obtainBooks()
        );

    }

    /**
     * @Notes: 添加数据
     */
    public function store(Request $request)
    {


    }

    /**
     * @Notes:  根据Id查询一条
     * @Interface show
     */
    public function show($book)
    {

    }

    public function update(Request  $request, $book)
    {


    }

    public function destroy($book)
    {


    }


}
