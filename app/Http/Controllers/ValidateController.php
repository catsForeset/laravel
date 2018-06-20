<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers;

use App\Http\Requests\UserRules;

class ValidateController extends Controller
{
    public function lists(){
        return view('validate.list');
    }

//    public function post(Request $request){
//        $validator=$request->validate([
//            //字段为必须，最大长度为20
//            'name'=>'required|max:20',
//            //在user表里，pass字段不能重复
//            'pass'=>'required|unique:user',
//            //bail，第一次验证失败后停止验证后续规则。如果max验证没有通过，不会验证email
//            'email'=>'bail|required|max:5|email',
//            'tel'=>'required',
//            //time为空或者为日期都是正确的
//            'time'=>'nullable|date'
//        ]);
//        echo 'ok';
//    }

    //使用验证类
    public function post(UserRules $request){
        echo 'ok';
    }

}