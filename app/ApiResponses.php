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

    protected function error($errors = [], $statusCode = 500)
    {
        if (is_string($errors)) {
            return response()->json([
                'message' => $errors,
                'status' => $statusCode
            ], $statusCode);
        }

        return response()->json([
            'errors' => $errors,
        ], $statusCode);
    }

    public function unauthorized($message = null)
    {
        return $this->error($message ?: 'Unauthorized', Response::HTTP_UNAUTHORIZED);
    }

    public function forbidden($message = null)
    {
        return $this->error($message ?: 'Forbidden', Response::HTTP_FORBIDDEN);
    }
}
