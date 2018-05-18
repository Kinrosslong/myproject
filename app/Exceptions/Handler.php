<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
        if($request->is('api/*')) {
            $error = $this->convertExceptionToResponse($exception);
            $this->response['StatusCode'] = $error->getStatusCode(); // http 状态码
            $this->response['trace'] = $exception->getTraceAsString(); // 报错详情
            $this->response['msg'] = $exception->getMessage(); // 报错信息
            if(config('app.debug')) { //这里貌似是开启了配置文件 .env APP_DEBUG=true 才行
                $this->response['msg'] = empty($exception->getMessage()) ? 'something error' : $exception->getMessage();
                if($error->getStatusCode() >= 500) {
                    if(config('app.debug')) {
                        $this->response['trace'] = $exception->getTraceAsString();
                        $this->response['code'] = $exception->getCode();
                    }
                }
            }
            $this->response['data'] = [];
            return response()->json($this->response, $error->getStatusCode());
        }

        return parent::render($request, $exception);
    }
}
