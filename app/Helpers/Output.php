<?php


namespace App\Helpers;


use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class Output
{
    public static function success($data, $statusCode = Response::HTTP_OK)
    {
        return response()->json($data, $statusCode);
    }

    public static function error($statusCode = Response::HTTP_BAD_REQUEST, $message = '')
    {
        return response()->json(['message' => $message], $statusCode);
    }
}
