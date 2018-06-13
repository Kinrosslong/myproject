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
            'title' => 'required|max:55',
            'content' => 'required',
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
            'content.required'  => '必填项,不能为空',
        ];
    }
}
