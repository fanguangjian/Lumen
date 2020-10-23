<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


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
//    public function store(Request $request)
//    {
//
//    }
//
//    /**
//     * @Notes:  根据Id查询一条
//     * @Interface show
//     */
//    public function show($book)
//    {
//
//    }
//
//    public function update(Request  $request, $book)
//    {
//
//    }
//
//    public function destroy($book)
//    {
//
//    }
}
