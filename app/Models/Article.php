<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class Article extends Model
{

    /**
     * @var 绑定数据表
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable. 设置批量插入字段
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'title', 'content',
    ];

    /**
     * @Notes:  根据id查询模型是否存在
     * @param  string
     * @return  object
     */
    public static function findModel($id)
    {
        if (($model = Article::find($id)) !== null) {
            return $model;
        }

        throw new ModelNotFoundException('请求文章模型不存在.');
    }

    /**
     * @Notes: 文章列表
     * @param  array $where
     * @return  array
     */
    public function articleList(array $where = [], $num = 0, $pagesize = 10)
    {
        $articlesList = Article::where($where)
            ->offset($num)
            ->limit($pagesize)
            ->orderBy('created_at', 'desc')
            ->get(); // get 方法获取表中所有记录

        return $articlesList;
    }

    /**
     * @Notes:  获取文章总数
     * @param  array  $where
     * @return  int
     */
    public function articleTotal(array $where = [])
    {
        return Article::where($where)->count();
    }

    /**
     * @Notes:  文章添加
     * @param  array  $param
     * @return  array
     */
    public function add(array $param = [])
    {
        try {
            return  Article::create($param);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @Notes:  文章编辑
     * @param  array  $param
     * @return  array
     */
    public function edit(array $param = [])
    {
        try {
            return self::findModel($param['id'])->update($param);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @Notes: 根据id删除文章
     * @param  integer
     * @return  boolean
     */
    public function del($id)
    {
        return $this->findModel($id)->delete();
    }

    /**
     * @Notes:  批量删除
     * @param  array  $ids
     * @return  boolean
     */
    public function delAll(array $ids = [])
    {
        try {
            return Article::whereIn('id', $ids)->delete();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

}
