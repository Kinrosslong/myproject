<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException; //403 权限报错 未经授权的
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Validation\ValidationException; //422 验证错误
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException; //这个是捕获jwt异常
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; //404 找不到页面或者路径

class Handler extends ExceptionHandler
{

    /**
     * 自定义返回的响应
     *
     * @var array
     */
    protected $response = [];


    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
//        if($request->is('api/*')) {
//
//            // 模型里面的数据找不到会报错404
//            if ($exception instanceof ModelNotFoundException) {
//                $e = new NotFoundHttpException($exception->getMessage(), $exception);
//                return response()->json([
//                    'statusCode'=> $e->getStatusCode(),
//                    'msg' => $e->getMessage(),
//                    'data' => [],
//                ],$e->getStatusCode());
//            }
//
//            // 404 请求资源不存在
//            if($exception instanceof NotFoundHttpException) {
//                return response()->json([
//                    'statusCode'=> $exception->getStatusCode(),
//                    'msg' => 'Not Found',
//                    'data' => []
//                ], $exception->getStatusCode());
//            }
//
//            // 403 没有权限 用户认证通过但是没有权限执行该操作
//            if($exception instanceof AuthorizationException) {
//                return response()->json([
//                    'statusCode'=> 403,
//                    'msg' => '未经授权的.',
//                    'data' => []
//                ], 403);
//            }
//
//            //捕获CSRF TOKEN失效异常
//            if ($exception instanceof TokenMismatchException) {
//                return response()->json([
//                    'statusCode' => 419,
//                    'msg' => 'No operation for a long time!<br>This page need to refresh!',
//                    'data' => []
//                ], 419);
//            }
//        }

        return parent::render($request, $exception);
    }

    /**
     * @Notes:  401认证异常
     * @param  string
     * @return  json
     */
//    protected function unauthenticated($request, AuthenticationException $exception)
//    {
//        return response()->json([
//            'statusCode'=> 401,
//            'msg' => $exception->getMessage(),
//            'data' => []
//        ], 401);
//    }

    /**
     * @Notes:  422 验证那边的规则报错 只有验证规则才有errors
     * @param  string
     * @return  json
     */
//    protected function invalidJson($request, ValidationException $exception)
//    {
//        return response()->json([
//            'statusCode'=> $exception->status,
//            'msg' => $exception->getMessage(),
//            'errors' => $exception->errors(),
//            'data' => []
//        ], $exception->status);
//    }


    /**
     * Prepare a JSON response for the given exception. 重写报错500
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
//    protected function prepareJsonResponse($request, Exception $e)
//    {
//        $status = $this->isHttpException($e) ? $e->getStatusCode() : 500;
//
//        return response()->json([
//            'statusCode'=> $status,
//            'msg' => $e->getMessage(),
//            'data' => []
//        ], $status);
//    }

}
