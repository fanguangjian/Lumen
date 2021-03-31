<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     29/3/21 23:32
 */
namespace  App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * obtainAuthors, obtain the full list of author from the author services
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }


}