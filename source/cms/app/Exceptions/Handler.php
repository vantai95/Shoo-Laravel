<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use League\OAuth2\Server\Exception\OAuthServerException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
        \League\OAuth2\Server\Exception\OAuthServerException::class,
        \Doctrine\DBAL\Driver\PDOException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if (str_contains($request->path(), 'api/')) {
            if ($exception instanceof AuthenticationException
                || $exception instanceof OAuthServerException) {
                return response()->json([
                    'success' => false,
                    'code' => config('api.code.auth.unauthenticated'),
                    'message' => __('errors.auth.unauthenticated'),
                ], 401);
            }
            else if ($exception instanceof NotFoundHttpException) {
                return response()->json([
                    'success' => false,
                    'code' => config('api.code.common.api_not_found'),
                    'message' => __('errors.common.api_not_found'),
                ], 404);
            }

            return response()->json([
                'success' => false,
                'code' => config('api.code.common.unknown'),
                'message' => __('errors.common.unknown'),
            ], 500);
        }

        if($exception instanceof ValidationException){
            return parent::render($request, $exception);
        }

        $message = '';
        if ($request->get('debug') == '2') {
            $message = $exception->getTraceAsString();
        } elseif (env('APP_DEBUG') || $request->get('debug') == '1') {
            $message = $exception->getMessage();
        }

        $code = 500;
        if ($exception instanceof NotFoundHttpException) {
            $code = 404;
        }
        return response()->view('errors.' . $code, compact('message'), $code);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Auth\AuthenticationException $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}
