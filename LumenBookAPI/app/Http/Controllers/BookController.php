<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;


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
