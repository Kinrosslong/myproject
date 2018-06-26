<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequsetsArticlesEdit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required',
            'title' => 'required|max:55|min:5',
            'content' => 'required|max:255|min:5',
        ];
    }

    /**
     * @Notes:  错误信息
     * @return  mixed
     */
    public function messages()
    {
        return [
            'id.required' => '文章索引ID不能为空',
            'title.required' => '必填项,不能为空',
            'title.max' => '文章标题不能大于55个字符',
            'content.required'  => '必填项,不能为空',
            'content.max' => '内容不超过255个字符',
            'content.min' => '文章内容不能小于5个字符',
            'title.min' => '文章标题不能小于于5个字符',
        ];
    }
}
