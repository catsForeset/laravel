<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlController extends Controller
{
    public function index(){
        //查询
        //表为全名，and加入更多条件
//        $data=DB::select('select * from user where status = :status and id = :id',['status'=>10,'id'=>1]);

        //插入
        //返回bool,添加多条数据values要跟上
//        $data = DB::insert('insert into user (name,pass,status) values (?,?,?),(?,?,?)',['gg','123',10,'mm','123',10]);

        //更新
        //返回受影响的行数,and加入多条件
//        $data = DB::update('update user set status=0 where name=?',['mm']);

        //删除
        //返回受影响行数
//        $data = DB::delete('delete from user where name=?',['mm']);
//        var_dump($data);
    }
}
