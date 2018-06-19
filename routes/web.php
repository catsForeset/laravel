<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    返回resources/views/welcome.blade.php文件页面，可换成其他文件
    return view('welcome');
});


//Route::get('/laravel',function(){//访问此路由输出以下
//    echo 'laravel';
//});

//Route::get('/user','IndexController@index');//访问app/Http/IndexController.php里的index方法
//Route::get('/data','IndexController@data');

////获取环境配置
//Route::get('env',function (){
//    //env没有配置的话，返回默认值pk
//   var_dump(env('DB_PREFIO',"pk"));
//});


////获取网站配置
//Route::get('conf',function (){
////    //读取当前时区
////   echo date("Y-m-d H:i:s");
////   echo config('app.timezone');
////    //读取邮件配置
////    dd(config('mail.port'));
//
//    //指定时区
//    config(['app.timezone'=>'UTC']);
//    echo config('app.timezone');
//
//
//});

////post，get请求
//Route::get('login','LoginController@login');
//Route::post('check','LoginController@check');
//
////put请求
//Route::get('putWeb','LoginController@putWeb');
////Route::put('put','LoginController@put');报错
//Route::any('put','LoginController@put');

//一个路由多种请求
//Route::match(['get','post'],'/','IndexController@data');
//Route::any('/','IndexController@data');

//资源路由
//Route::get('user/index','UserController@index');
//Route::get('user/add','UserController@add');
//Route::get('user/edit','UserController@edit');
//Route::post('user/insert','UserController@insert');
//Route::post('user/update','UserController@update');
//Route::get('user/delete','UserController@delete');
//等价于以上几种方式，可在项目跟目录php artisan route:list 查看
//Route::resource('Admin','IndexController');


//待参数路由
//Route::get('User/del/{id}',function($id){
//    echo $id;
//});
////多参数
//Route::get('User/info/{id}/{sex}',function($id,$sex){
//    echo $id.' '.$sex;
//});
////可能不存在参数,不带参数返回默认值
//Route::get('User/edit/{id?}',function($id='默认值'){
//    echo $id;
//});
////控制器接收数据
//Route::get('userinfo/{name}/{sex}','IndexController@userinfo');


//命名路由
//Route::get('abc','IndexController@abc')->name('one');//路由别名为one
//Route::get('def','IndexController@def');

//路由组,命名空间，中间件
//Route::group(['namespace'=>'Admin'],function (){
////    Route::get('admin','Admin\IndexController@index');
////    Route::get('admin/user','Admin\UserController@index');
////    Route::get('admin/goods','Admin\GoodsController@index');
//    //把Admin提到namespace去
//    Route::get('admin','IndexController@index');
//    Route::get('admin/user','UserController@index');
//    Route::get('admin/goods','GoodsController@index');
//});

////用户登录
//Route::get('admin/login','Admin\LoginController@login');
////登录操作
//Route::post('admin/check','Admin\LoginController@check');
//
////前台路由
//Route::group(['namespace'=>'Home'],function (){
//    Route::get('/','IndexController@index');
//
//});
//
//
////后台路由
//Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'adminLogin'],function (){
//    //通过路由组提取公共命名空间和前缀
//    Route::get('/','IndexController@index');
//    Route::resource('user','UserController');
//    Route::resource('goods','GoodsController');
//});


//请求
//Route::get('request','RequestController@index');
//Route::match(['post','get'],'index/add','IndexController@add');
//
//Route::get('reg','LoginController@reg');
////Route::match(['post','get'],'insert','LoginController@insert');
//Route::match(['post','get'],'insert','LoginController@insert');
//
////文件上传
//Route::get('photo','LoginController@photo');
//
////处理文件上传
//Route::post('upload','LoginController@upload');
//
////cookie
//Route::get('cookie','LoginController@cookie');

//响应
Route::get('view',function(){
    //返回带参数的视图
//    return view('view',['name'=>'test']);
    $array=['a'=>'aaa','b'=>'bbb'];

    return view('view')->with($array);
//    return $array;
    //同上，响应json
//    return response()->json($array);

    //下载文件
//    return response()->download('C:\Users\Administrator\Pictures\loko.jpg');
    //查看文件
//    return response()->file('C:\Users\Administrator\Pictures\loko.jpg');
});

//视图
Route::get('view','ViewController@index');
Route::get('shitu','ViewController@shitu');
Route::get('index1','ViewController@index1');
Route::get('buju','ViewController@buju');

Route::get('validate','ValidateController@lists');
Route::post('validate/post','ValidateController@post');


