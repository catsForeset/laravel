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
use Illuminate\Support\Facades\View;

//此目录已经有一个Controller，此类直接继承该类，不用再use Controller
class ViewController extends Controller
{
    public function index(){
        //判断视图是否存在
//        if (View::exists('view')){
//            var_dump(View::exists('view'));
//        }

//        //with()加一条数据到视图
//        return view('view')->with('name','Jhon');

//        //加多条数据到视图
////        return view('view',['name'=>'a','b'=>'b']);
//        //或者
//        $data=['name'=>'a','b'=>'b'];
////        return view('view',$data);
//        //或者
//        return view('view')->with($data);
//        //或者
//        return view('view')->with('name','a')->with('b','b');

        return view('view')->with('pass','123')->with('html','<b>ok</b>');

    }
    //循环
    public function shitu(){
        return view('shitu')->with('weight',80);
    }

    //
    public function index1(){
        $data=DB::table('user')->get();
        //默认获取的结果是对象
//        var_dump($data);
        return view('index1')->with('data',$data);
    }

    //模板布局
    public function buju(){
        
    }

}