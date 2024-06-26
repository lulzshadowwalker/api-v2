<?php

use App\ApiHelper;
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
use Illuminate\Http\Response;

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
        $response = new ApiHelper();

        $exceptions->render(function (ValidationException $e, Request $request) use ($response) {
            foreach ($e->errors() as $key => $value) {
                foreach ($value as $message) {
                    $errors[] = [
                        'status' => Response::HTTP_UNPROCESSABLE_ENTITY,
                        'message' => $message,
                        'source' => $key
                    ];
                }
            }

            return $response->error($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
        });

        $exceptions->render(function (ModelNotFoundException $e, Request $request) use ($response) {
            return $response->notFound([
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Resource not found',
                'source' => basename($e->getModel()::class),
            ]);
        });

        $exceptions->render(function (NotFoundHttpException $e, Request $request) use ($response) {
            return $response->notFound([[
                'status' => Response::HTTP_NOT_FOUND,
                'message' => 'Resource not found',
                'source' => $request->path(),
            ]]);
        });

        $exceptions->render(function (AuthenticationException $e, Request $request) use ($response) {
            return $response->unauthorized('Unauthenticated', Response::HTTP_UNAUTHORIZED);
        });

        $exceptions->render(function (AccessDeniedHttpException $e, Request $request) use ($response) {
            return $response->unauthorized([
                [
                    'status' => Response::HTTP_FORBIDDEN,
                    'message' => 'Forbidden',
                    'source' => '',
                ]
            ], Response::HTTP_FORBIDDEN);
        });

        $exceptions->render(function (AuthorizationException $e, Request $request) use ($response) {
            return $response->forbidden([
                'status' => Response::HTTP_FORBIDDEN,
                'message' => 'You are not authorized to perform this action',
                'source' => '',
            ]);
        });

        $exceptions->render(function (MethodNotAllowedHttpException $e, Request $request) use ($response) {
            return $response->error([
                'status' => Response::HTTP_METHOD_NOT_ALLOWED,
                'message' => 'Method not allowed',
                'source' => $request->method() . ' ' . $request->path(),
            ], Response::HTTP_METHOD_NOT_ALLOWED);
        });

        $exceptions->render(function (Exception $e, Request $request) use ($response) {
            return $response->error([
                'type' => basename(str_replace('\\', '/', get_class($e))),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'source' => 'unknown',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        });
    })
    ->create();
