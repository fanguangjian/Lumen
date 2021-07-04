<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var bookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
//        return  "AAAA";
    }


    /**
     * Create one new author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->bookService->createBook($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtains and show one author
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Remove an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }
}
