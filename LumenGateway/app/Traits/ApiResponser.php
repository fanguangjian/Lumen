<?php
/**
 * @subpackage Documentation\API
 * @author     G.F
 * @ctime:     11/9/20 14:56
 */
namespace  App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * @Notes:
     * @Interface successResponse
     * @param $data
     * @param int $code, 200
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK){
//        return response()->json(['data' => $data], $code);
        return response($data, $code)->header('Content-Type','application/json');

    }

    /**
     * @Notes:
     * @Interface errorResponse
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    /**
     * @Notes:
     * @Interface errorResponse
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */

    public function errorMessage($message, $code){
        return response($message, $code)->header('Content-Type','application/json');
    }
}
