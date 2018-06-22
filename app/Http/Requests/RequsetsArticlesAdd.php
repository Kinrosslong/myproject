<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequsetsArticlesAdd extends FormRequest
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
            'title' => 'required|unique:articles|max:55',
            'content' => 'required|max:255',
        ];
    }

    /**
     * @Notes:  错误信息
     * @return  mixed
     */
    public function messages()
    {
        return [
            'title.required' => '必填项,不能为空',
            'title.unique' => '标题已经被采纳了',
            'content.required'  => '必填项,不能为空',
        ];
    }
}
