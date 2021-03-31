<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     29/3/21 23:32
 */


namespace  App\Services;

use App\Traits\ConsumesExternalService;

class BookService{

    use ConsumesExternalService;

    public $baseUri;

    public function __construction(){
        $this->baseUri = config('services.books.base_uri');
    }


}