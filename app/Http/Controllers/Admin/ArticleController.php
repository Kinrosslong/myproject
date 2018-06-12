<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    /**
     * @Notes:  文章初始化
     * @param  string pagesize 页面大小
     * @param  string pagenum  页码
     * @return  json
     */
    public function index(Request $request)
    {
        $pagesize = $request->input('pagesize');
        $pagenum = $request->input('pagenum');
        $num = ($pagenum - 1) * $pagesize;
        $articlesList = DB::table('articles')->offset($num)->limit($pagesize)->get(); // get 方法获取表中所有记录
        $total = DB::table('articles')->count();
        return ['list' => $articlesList, 'total' => $total];
    }

    /**
     * @Notes:  文章删除
     * @param  string id 文章id
     * @return  json
     */
    public function articleDel(Request $request)
    {
        $id = $request->input('id');
        $qid = $request->query('id');
        //        if(empty($id)) {
        ////            return
        //        }
        dump($id);
        dd($id);
        dump($qid);
        dd($qid);

        $res = Db::table('articles')->where(['id' => $id])->delete();
        return ['id' => $res];
    }

    /**
     * @Notes:  注释
     * @param  string or array  $data
     * @return  mixed
     */
    public function acticleList()
    {
        return [1,2,3,4,5,6,'test' => '45678'];
    }
}
