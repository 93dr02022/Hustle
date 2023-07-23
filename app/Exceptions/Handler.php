<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Requested resource not found'
            ], 404);
        }

        if ($exception instanceof NotFoundHttpException && $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid resource url Path'
            ], 404);
        }

        if ($exception instanceof AuthorizationException && $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ], 403);
        }

        if ($exception instanceof AccessDeniedHttpException && $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'This action is unauthorized.'
            ], 403);
        }

        if ($exception instanceof ThrottleRequestsException && $request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Too many attempts was made please try later.'
            ], 429);
        }

        return parent::render($request, $exception);
    }

    /**
     * Convert a validation exception into a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Validation\ValidationException  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        $jsonResponse = parent::invalidJson($request, $exception);

        $original = (array) $jsonResponse->getData();

        $jsonResponse->setData(array_merge($original, [
            'success' => false,
            'errors' => $original['errors'],
        ]));

        return $jsonResponse;
    }
}
