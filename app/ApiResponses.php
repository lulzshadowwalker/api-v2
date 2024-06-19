<?php

namespace App;

use Illuminate\Http\Response;

trait ApiResponses
{
    protected function ok($message, $data = [])
    {
        return $this->success($message, $data, Response::HTTP_OK);
    }

    protected function notFound($message)
    {
        return $this->error($message, Response::HTTP_NOT_FOUND);
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

    public function unauthorized()
    {
        return $this->error('Unauthorized', Response::HTTP_UNAUTHORIZED);
    }
}
