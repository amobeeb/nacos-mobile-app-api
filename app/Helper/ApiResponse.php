<?php
namespace App\Helper;
trait ApiResponse
{
    /**
     * @param $code
     * @param $message
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function responseSuccess($code, $message, $data)
    {
        return response()->json([
            'status'=>$code,
            'message'=>$message,
            'data'=>$data
        ], $code);
    }

    /**
     * @param $code
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function responseError($code, $message)
    {
        return response()->json([
            'status'=>$code,
            'message'=>$message
        ], $code);
    }
}
