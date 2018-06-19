<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\6\4 0004
 * Time: 22:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login.login');
    }
    public function check(){
//        dd($_POST);die();//获取表单提交数据
        //判断
        if($_POST['user']=='admin' && $_POST['pass']=='123'){
            session(['adminUerInfo'=>$_POST['user']]);
            return redirect('admin');
        }else{
            return back();
        }
    }

    public function putWeb(){
        return view('putWeb');
    }

    public function put(Request $request){
        dd($request->input());
    }

}