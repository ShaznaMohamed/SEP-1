<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Database\Eloquent\PDOException;
use Illuminate\Database\PDOException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    //abort(404);


    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
      if ($e instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException)
      {
          return response(view('errors.404'), 404);
      }

      else if($e instanceof NotFoundHttpException)
      {
          return response()->view('errors.404', [], 404);
      }

      else if($e instanceof \PDOException)
      {
          return response()->view('errors.database', [], 404);
      }

      return parent::render($request, $e);
    }
}
