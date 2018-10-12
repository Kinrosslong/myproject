<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RequsetsArticlesEdit;
use App\Http\Requests\RequsetsArticlesAdd;
use App\Models\Article;

class ArticleController extends BaseController
{

    protected $models;
    public function __construct(Article $models)
    {
//        parent::__construct(); //调用或者说继承父类的构造函数:
        $this->models = $models;
    }

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
        if ($selectWord) {
            $where = [
                ['title', 'like' , $selectWord.'%']
            ];
        }

        $articlesList = $this->models->articleList($where, $num, $pagesize);
        $total = $this->models->articleTotal($where);
        return $this->success(['list' => $articlesList, 'total' =>   $total]);
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

//        dd($request->all());
       if ( $this->models->add($request->all()) ) {
           return $this->success();
       }
       return $this->error('文章新增失败');
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
        if ( $this->models->edit($request->all()) ) {
            return $this->success();
        }
        return $this->error('文章编辑失败');
    }

    /**
     * @Notes:  文章删除
     * @param  string id 文章id
     * @return  json
     */
    public function articleDel(Request $request)
    {
        $id = $request->input('id', '');
        if (empty($id)) {
            return $this->error('参数错误');
        }

        if( $this->models->del($id) ) {
            return $this->success();
        }
        return $this->error('文章删除失败');
    }

    /**
     * @Notes:  批量删除
     * @param  array  $ids
     * @return  json
     */
    public function articleDelAll(Request $request)
    {
        $ids = $request->input('ids', '');
        if (empty($ids)) {
            return $this->error('参数错误');
        }
        $ids = explode(',', $ids);
        if( $this->models->delAll($ids) ) {
            return $this->success();
        }
        return $this->error('文章删除失败');
    }
}
