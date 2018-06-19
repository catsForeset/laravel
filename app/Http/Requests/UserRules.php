<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRules extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //一定要改成true，否则报错This action is unauthorized.
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
            'name'=>'required|max:10',
            'pass'=>'required|unique:user'
        ];
    }

    //自定义验证错误信息
    public function messages()
    {
        return[
          'name.required'=>'name不能为空',
            'name.max'=>'name最大长度不能超过10',
            'pass.unique'=>'pass重复'
        ];
    }
}
