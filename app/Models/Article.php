<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
    public function findModel($id)
    {
        if (($model = Article::find($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('请求文章模型不存在.');
    }

    /**
     * @Notes:  文章添加
     * @param  array  $param
     * @return  array
     */
    public function add(array $param = [])
    {
        $models = new Article();
        return $models->create($param);
    }

    /**
     * @Notes:  文章编辑
     * @param  array  $param
     * @return  array
     */
    public function edit(array $param = [])
    {
        $models = $this->findModel($param['id']);
        return $models->update($param);
    }



}
