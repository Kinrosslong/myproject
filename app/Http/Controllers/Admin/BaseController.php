<?php
/**
 * Created by PhpStorm.
 * User: kinross
 * Date: 2018/6/28
 * Time: 17:03
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{

    /**
     * @Notes: 返回特定格式的json数据到客户端
     * @param int $ret 错误码
     * @param int $code 流程引导码
     * @param string $msg 错误信息
     * @param array $data 数据
     */
    protected function apiResponse( $code = 0, $msg = '', $data = array())
    {
        return response()->json([
            'code'=> $code,
            'msg' => $msg,
            'data' => $data
        ]);
    }

    /**
     * @Notes:  错误api响应
     * @param  string
     * @return  json
     */
    public function error($msg, $code = -1)
    {
       return $this->apiResponse($code, $msg);
    }

    /**
     * @Notes:  成功api响应
     * @param   array  $data
     * @return  json
     */
    public function success(array $data = [])
    {
        return $this->apiResponse(0,'ok', $data);
    }

}
