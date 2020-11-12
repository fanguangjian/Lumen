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
    public function show($author)
    {

    }

    public function update(Request  $request, $author)
    {

    }

    public function destroy($author)
    {

    }


}
