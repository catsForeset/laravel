<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;//或者 use DB;

//此目录已经有一个Controller，此类直接继承该类，不用再use Controller
class UserController extends Controller
{
    public function index(){
//        echo "后台user";
        return view('admin.user.index');
    }

    //修改页面
    public function edit(){
        return view('admin.user.edit');
    }


    //添加页面
    public function create(){
        return view('admin.user.create');
    }

    //添加操作
    public function store(){
        return view('admin.user.create');
    }

    //修改操作
    public function update(){
        return view('admin.user.create');
    }

    //删除操作
    public function destroy(){
        return view('admin.user.create');
    }

}