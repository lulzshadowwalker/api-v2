<?php

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('api')
                ->prefix('/api/v1')
                ->name('api.v1.')
                ->group(base_path('routes/api_v1.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (ValidationException $e, Request $request) {
            foreach ($e->errors() as $key => $value)
                foreach ($value as $message) {
                    $errors[] = [
                        'status' => 422,
                        'message' => $message,
                        'source' => $key
                    ];
                }

            return response()->json([
                'errors' => $errors
            ]);
        });

        $exceptions->render(function (ModelNotFoundException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 404,
                    'message' => 'Resource not found',
                    'source' => basename($e->getModel()::class),
                ]
            ], 404);
        });

        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 404,
                    'message' => 'Resource not found',
                    'source' => '',
                ]
            ], 404);
        });

        $exceptions->render(function (AuthenticationException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 401,
                    'message' => 'Unauthenticated',
                    'source' => '',
                ]
            ], 401);
        });

        $exceptions->render(function (AccessDeniedHttpException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 401,
                    'message' => 'Unauthenticated',
                    'source' => '',
                ]
            ], 401);
        });

        $exceptions->render(function (AuthorizationException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 403,
                    'message' => 'You are not authorized to perform this action',
                    'source' => '',
                ]
            ], 403);
        });

        $exceptions->render(function (MethodNotAllowedHttpException $e, Request $request) {
            return response()->json([
                'errors' => [
                    'status' => 405,
                    'message' => 'Method not allowed',
                    'source' => $request->method() . ' ' . $request->path(),
                ]
            ], 405);
        });

        $exceptions->render(function (Exception $e, Request $request) {
            return response()->json([
                'errors' => [
                    'type' => basename(str_replace('\\', '/', get_class($e))),
                    'status' => 500,
                    'message' => $e->getMessage(),
                    'source' => 'unknown',
                ]
            ], 500);
        });
    })
    ->create();
