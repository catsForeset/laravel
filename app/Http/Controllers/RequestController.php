<?php
namespace App\Http\Controllers;

//request请求
use Illuminate\Http\Request;

class RequestController extends Controller{
    public function index(Request $request){
//        //获取当前的完全的url地址,http://www.locallaravel.com/request?name=1&pass=123
//        echo $request->fullUrl();
//        echo '<hr/>';
//
//        //获取url路径部分
//        echo $request->path();
//        echo '<hr/>';
//
//        //获取url,http://www.locallaravel.com/request
//        echo $request->url();

        //判断路由是否是request
        if($request->is('request')){
            //true或false
            var_dump($request->is('request'));
        }
        echo '<hr/>';

        //获取请求方式
        if($request->isMethod('get')){
            //GET或POST
            var_dump($request->method());
        }

        //获取数据

    }
}