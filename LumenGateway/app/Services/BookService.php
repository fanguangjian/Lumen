<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     3/12/20 21:58
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
