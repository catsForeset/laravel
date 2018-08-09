<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

    //ORM模型
    public function user(){
        $data = User::orderBy('id','desc')->get();
        //数据库查询返回仓库，下同
        return view('orm.user',['data'=>$data]);
//        return view('user',compact('data'));
//        return view('user')->with('data',$data);
//        return view('user')->with(['data'=>$data]);
//        return view('user')->with(compact('data'));
    }

    //orm模型，create
    public function ormCreate(Request $request){
        $user = new User();
        $id = $request->input('id','');
        if ($request->isMethod('get')){
            $detail = $user->find($id);
            return view('orm.create',compact('detail'));
        }if ($request->isMethod('post')){
            $data = $request->all();
            if (empty($id)){
                $result = $user->create($data);
            }else{
                $result = $user->update($data);
            }
            dd($result);
        }
    }

}