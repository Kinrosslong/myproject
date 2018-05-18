<?php

namespace App\Http\Controllers;


class DemoController extends Controller
{

    protected $sign = '【众汇金融】';
    public function demo()
    {
        return view('demo.demo');
    }



    /**
     * @desc 闪信通发送短信
     * @param  string $mobile  手机号
     * @param  string $content 短信内容
     * @return boolean
     */
    public function sendsxtmsg($mobile = '', $content = '')
    {
        $content = iconv('UTF-8', 'GB2312', $this->sign.$content);
        $username = urlencode('901161');
        $password = urlencode('zfx!*8311');
        $mobiles = trim($mobile);
        $content = urlencode(trim($content));

        $fp = Fopen("http://119.145.253.67:8080/edeeserver/sendSMS.do"."?UserName=$username&Password=$password&MobileNumber=$mobiles&MsgContent=$content","r");
        $ret = fgetss($fp,255);
        urldecode($ret);
        Fclose($fp);
    }

    /**
     * @desc 玄武发送短信
     * @param  string $mobile  手机号
     * @param  string $content 短信内容
     * @return boolean
     */
    public function sendxwmsg($mobile = '', $content = '')
    {
        $client = new \SoapClient('http://211.147.239.62/Service/WebService.asmx?wsdl');
        $uuid = static::guid();
        $MessageDatat1 = array('Phone' => $mobile,'Content' => $content,'vipFlag' => 'false','customMsgID' => '','customNum' => '');
        $mtpacktmp = array('uuid' => $uuid,'batchID' => $uuid,'batchName' => '','sendType' => '1','msgType' => '1','msgs' => array('MessageData' => $MessageDatat1),'bizType' => '','distinctFlag' => '','scheduleTime' => '','deadline' => '');
        $points = $client->Post(array('account' => 'SZZHJR@SZZHJR','password' => '8da2SzGW','mtpack' => $mtpacktmp));
        $points = static::object_array($points);

        return $points;
    }


    public function toSms()
    {
        $res = $this->sendsxtmsg('18576722109', 'this si test');
//        dd($res);
    }


    //生成uuid的方法，客户如有其他方法生成，可使用其他方法。
    public static function guid()
    {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);

        return $uuid;
    }


    public static function object_array($array)
    {
        if(is_object($array)) {
            $array = (array)$array;
        }
        if(is_array($array)) {
            foreach($array as $key=>$value) {
                $array[$key] = static::object_array($value);
            }
        }
        return $array;
    }
}