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
//            'name'=>'required|max:10',
//            'pass'=>'required|unique:user',

            //accepted,可接受参数为yes,on,true,1
//            'name'=>'accepted',

            //after规则，同理beforre
            //后天的日期,Y-m-d 格式
//            'time'=>'required|date|after:tomorrow',
            //时间在time参数之后
//            'end_time'=>'required|date|after:time',
            //时间在time之后或者相同
//            'end_time'=>'required|date|after_or_equal:time',

            //必须是字母（不能是数字或符号）
//            'name'=>'alpha',
            //字母和数字和破折号 - 和下划线 _
//            'name'=>'alpha_dash',
            //字母和数字
//            'name'=>'alpha_num',

            //长度范围[1,3]
//            'name'=>'between:1,3',
            //可接受参数true,false,1,0,"1","0"
//            'name'=>'boolean',

            //必须要有一个time_confirmation字段值和它一致，才能验证通过
            'time'=>'confirmed',

        ];
    }

    //自定义验证错误信息
    public function messages()
    {
        return[
            //指定某种验证方式,占位符 :attriibute 是指定的该字段
            'required'=>':attribute 不能为空',
            //指定某个字段
//          'name.required'=>'name不能为空',
            'name.max'=>'name最大长度不能超过10',
            'pass.unique'=>'pass重复',
        ];
    }
}
