<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     29/3/21 22:27
 */
namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;

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
          return $this->successResponse($this->authorService->obtainAuthors());
//
//        $authors = Author::all();
////        return $this->successResponse($books);
//        return $this->successResponse($authors);
//
//
//        return "AAAA";
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

    public function update(Request $request, $author)
    {

    }

    public function destroy($author)
    {

    }
}