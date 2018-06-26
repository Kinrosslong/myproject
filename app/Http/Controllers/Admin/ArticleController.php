<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RequsetsArticlesEdit;
use App\Http\Requests\RequsetsArticlesAdd;
use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * @Notes:  文章初始化
     * @param  string pagesize 页面大小
     * @param  string pagenum  页码
     * @param string selectWord 查询条件
     * @return  json
     */
    public function index(Request $request)
    {
        $pagesize = $request->input('pagesize', 5);
        $pagenum = $request->input('pagenum', 1);
        $selectWord = $request->input('select_word');
        $num = ($pagenum - 1) * $pagesize;
        $where = [];
        if($selectWord) {
            $where = [
                ['title', 'like' , $selectWord.'%']
            ];
        }

//        DB::enableQueryLog();
        $articlesList = Article::where($where)
            ->offset($num)
            ->limit($pagesize)
            ->orderBy('created_at', 'desc')
            ->get(); // get 方法获取表中所有记录
        $total = Article::where($where)->count();
//        $sql = DB::getQueryLog();
//        $articlesList = ['id'=> 1, 'title' => '123465', 'content']
        return response()->json([
            'code'=> 0,
            'msg' => 'ok',
            'data' => ['list' => $articlesList, 'total' =>   $total]
        ]);
    }


    /**
     * @Notes: 文章添加
     * @param  string id
     * @param  string title 标题
     * @param string content 内容
     * @return  json
     */
    public function articleAdd(RequsetsArticlesAdd $request)
    {
       $models =  new Article();
       $res = $models->add($request->all());
       if($res) {
           return response()->json([
               'code'=> 0,
               'msg' => '添加成功',
               'data' => []
           ]);
       }
        return response()->json([
            'code'=> -1,
            'msg' => '添加失败',
            'data' => []
        ]);
    }

    /**
     * @Notes:  文章编辑
     * @param  string id
     * @param  string title 标题
     * @param string content 内容
     * @return  json
     */
    public function articleEdit(RequsetsArticlesEdit $request)
    {
        $articleModel = new Article();
        $res = $articleModel->edit($request->all());
        if($res) {
            return response()->json([
                'code'=> 0,
                'msg' => '编辑成功',
                'data' => []
            ]);
        }
        return response()->json([
            'code'=> -1,
            'msg' => '编辑失败',
            'data' => []
        ]);
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

}
