<?php


use App\Http\Middleware\Cors;
use App\Http\Middleware\Lang;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'lang' => Lang::class,
            'cors' => Cors::class,
        ]);
    })
    ->withCommands([
        __DIR__ . '/../app/Console/Commands/GenerateApiScaffold',
        __DIR__ . '/../app/Console/Commands/StartProject',
    ])
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e, Request $request) {
            if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return response()->json(['error' => 'Resource not found'], 404);
            }
            if ($e instanceof NotFoundHttpException) {
                return response()->json([
                    'error' => [
                        'message' => $e->getMessage(),
                        'status_code' => 404
                    ]
                ], 404);
            }
            if ($request->is('api/*')) {
                $statusCode = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500;
                return response()->json([
                    'error' => [
                        'message' => $e->getMessage(),
                        'status_code' => $statusCode
                    ]
                ], $statusCode);
            }
        });
    })->create();
