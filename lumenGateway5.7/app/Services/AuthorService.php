<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     29/3/21 23:32
 */
namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
//        $this->secret = config('services.authors.secret');
    }

    /**
     * Obtain the full list of author from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
//        return  "SSSSS"; //sssss
    }

    /**
     * @Notes: Create one  author using the author service
     * @Interface createAuthor
     * @param $data
     * @return string
     */
    public function createAuthor($data){
        return $this->performRequest('POST','/authors', $data);
    }

    /**
     * obtain one single author from the author server
     * "/authors/{$author}" 双引号, ''无法获取数据
     */
    public function obtainAuthor($author){
        return $this->performRequest('GET', "/authors/{$author}");
    }

}