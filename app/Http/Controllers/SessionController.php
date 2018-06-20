<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers;


use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SessionController extends Controller
{
    public function index(Request $request){
        //Schema创建表
//        Schema::create('session',function($table){
//           $table->string('id')->unique();
//           $table->unsignedInteger('user_id')->nullable();
//           $table->string('ip_address',45)->nullable();
//           $table->text('user_agent')->nullable();
//           $table->text('payload');
//           $table->integer('last_activity');
//        });

        //用函数session添加session
        session(['key'=>'value','name'=>'Tom','age'=>null]);
        //同上，用put方法添加session
        $request->session()->put('keykey','valuevalue');
        //添加值到session中
//        $request->session()->push('user.teams','devalopers');
        //删除一个session
//        $request->session()->pull('user.teams');


        //获取session值
        $value = $request->session()->get('key');
        //获取所有session值
//        $all_session=$request->session()->all();

        //session不存在，返回默认值
        $value2 =$request->session()->get('key1','default');
        //同上
        $value3 = $request->session()->get('key2',function (){
           return 'default';
        });

        //判断是否存在session某个值
//        if($request->session()->has('key')){
//            var_dump($request->session()->has('age'));
//        }
        //和has的区别在于，session值为null时，has返回false，exists返回true
//        if($request->session()->exists('key')){
//            var_dump($request->session()->exists('age'));
//        }

        //laravel的session过期时间是120分钟
        //config/session.php查看和设置过期时间，'lifetime' => env('SESSION_LIFETIME', 120)
        //默认关闭浏览器session不过期，'expire_on_close' => false,
        //config/session.php设置关闭浏览器session过期，'expire_on_close' => true

        //session闪存。在下一个请求之前在session中存入数据
//        $request->session()->flash('flash','flashValue');
//        $request->session()->flash('flash2','flashValue2');
        //保留闪存数据
//        $request->session()->reflash();
        //保留特定闪存数据
//        $request->session()->keep(['flash']);

        //删除指定session
//        $request->session()->forget('key');
        //删除所有session
//        $request->session()->flush();

        //重新生成session ID,即重新生成_token参数
        $request->session()->regenerate();

        $all_session=$request->session()->all();



        var_dump($all_session);

    }

}