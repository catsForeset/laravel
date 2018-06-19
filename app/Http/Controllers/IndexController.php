<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;//或者 use DB;
use Illuminate\Http\Request;

//此目录已经有一个Controller，此类直接继承该类，不用再use Controller
class IndexController extends Controller
{
    public function index(){
        echo "ok";
    }

    public function data(){
        if(empty($_POST['search'])){
            $data=DB::table('user')->get();
        }else{
            echo '搜索';
            $data=DB::table('user')->get();
        }

//        dd($data); //dd()是laravel专用的打印数据的函数
        return view('user')->with('data',$data);
    }

    public function userinfo($name,$sex){
        var_dump($name);
        var_dump($sex);

    }

    public function abc(){

    }

    public function def(){
        //获取别名的url地址
//        echo route('one');

        //路由重定向
//        return redirect('abc');
        //路由重定向
        return redirect()->route('one');

    }

    public function add(Request $request){
        if($request->isMethod('GET')){
            return view('add');
        }elseif ($request->isMethod('POST')) {
            //获取所有方式的请求数据
            $data=$request->all();
            var_dump($data);

            //获取特定字段
            $name=$request->input('name','小明');
            var_dump($name);

            //判断字段是否存在,false或true
            if($request->has('name')){
                var_dump($request->has('name'));
            }

            //获取部分数据
            $data1=$request->only('name','pass');
            //同上
            $data1=$request->only(['name','a']);
            var_dump($data1);

            //获取除某个数据以外的数据
            $data2=$request->except('_token');
            //多个数据
            $data2=$request->except('_token','name');
            //同上
            $data2=$request->except(['_token','name']);
            var_dump($data2);
        }
    }

}