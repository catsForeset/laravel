<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\6\4 0004
 * Time: 22:08
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function check(){
        dd($_POST);//获取表单提交数据
    }

    public function putWeb(){
        return view('putWeb');
    }

    public function put(Request $request){
        dd($request->input());
    }

    //注册页面
    public function reg(){
        return view('reg');
    }

    public function  insert(Request $request){
        $name=$request->input('name');

        //把表单数据全部写入闪存
//        $request->flash();

        //把某些数据写入闪存
//        $request->flashOnly();

        //把除某些数据外的所有数据写入缓存
//        $request->flashExcept();

        //判断用户名长度
        if(strlen($name)>= 6 && strlen($name)<=12 ){

        }else{
            //返回上一个页面
            //或者在此写入闪存withInput()
            return back()->with('errors','用户名长度不满足')->withInput();
        }

    }

    public function photo(){
        return view('photo');
    }

    public function upload(Request $request){

        //获取所有上传的信息
//        dd($request->all());

        $img=$request->file('img');//出错
        //上传文件的信息
        $img2=$request->img;
        var_dump($img2);
        dd($img);

//        var_dump($request->hasFile('img'));//出错

//        $request->file('img')->move('./uploads','a.jpg');
    }

    public function  cookie(Request $request){

        //查看所有cookie
//        dd($request->cookie());


        //$request->cookie()和$_COOKIE不同，是因为laravel把cookie/session加密了
//        dd($_COOKIE);

        //查看某个cookie
//        dd($request->cookie('laravel_session'));
        //同上
//        echo Cookie::get('laravel_session');

        //设置cookie
        Cookie::queue('cookie','This is a cookie',10);

        //同上
        $cookie=cookie('cookie2','This is a cookie2',10);
        return \response('hello world')->cookie($cookie);
    }
}