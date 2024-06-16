<?php

namespace App;

use Illuminate\Http\Response;

trait ApiResponses
{
    protected function ok($message, $data = [])
    {
        return $this->success($message, $data, Response::HTTP_OK);
    }

    protected function success($message, $data = [], $statusCode = Response::HTTP_OK)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $statusCode
        ], $statusCode);
    }

    protected function error($message, $statusCode)
    {
        return response()->json([
            'message' => $message,
            'status' => $statusCode
        ], $statusCode);
    }
}
