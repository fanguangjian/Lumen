<?php

namespace App\Http\Controllers;

use App\Author;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * @var AuthorService
     */
    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * @Notes:
     * @Interface index
     */

    public function index()
    {
        return $this->successResponse(
            $this->authorService->obtainAuthors()
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
