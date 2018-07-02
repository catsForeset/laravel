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





        //get(),可用foreach遍历访问结果值
//        $data=DB::table('user')->get();
//        foreach ($data as $value){
//            echo $value->name;
//        }

        //fiirst(),返回一个 StdClass 对象
//        $data = DB::table('user')->first();
//        echo $data->name;

        //value(),获取结果某一列的第一个数据
//        $data = DB::table('user')->where('name','gg')->value('status');
//        echo $data;

        //pluck(),获取结果某一列的所有值
//        $data = DB::table('user')->pluck('name');
//        foreach ($data as $key=>$value){
//            echo $value.' ';
//        }

        //chunk(),每次只取出一小块结果进行处理
//        DB::table('user')->orderBy('id','desc')->chunk(2,function ($users){
//            foreach ($users as $value){
//                $GLOBALS['something'][] = $value->id;
//            }
//        });
//        var_dump($GLOBALS['something']);

        //count(),max(),min(),sum(),avg()
//        $count = DB::table('user')->count();
//        echo $count;
//        $max = DB::table('user')->max('id');
//        echo $max;
//        $min = DB::table('user')->min('id');
//        echo $min;
//        $sum = DB::table('user')->sum('id');
//        echo $sum;
//        $avg = DB::table('user')->avg('id');
//        echo $avg;

        //exists(),doesntExist(),判断是否存在，返回bool
//        $data = DB::table('user')->where('id',12)->exists();
//        $data2 = DB::table('user')->where('id',12)->doesntExist();
//        var_dump($data);
//        var_dump($data2);

        //select(),同原生select，as重命名字段
//        $data = DB::table('user')->select('name as user_name')->get();
//        foreach ($data as $value){
//            echo $value->user_name.' ';
//        }

        //distinct(),返回不重复结果
//        $data = DB::table('user')->select('name')->distinct()->get();
//        var_dump($data);

        //addSelect(),添加搜索字段
//        $query = DB::table('user')->select('status');
//        $data = $query->addSelect('name')->get();
//        var_dump($data);

        //DB::raw(),原生表达式
//        $data = DB::table('user')
//            ->select(DB::raw('count(*) as total'))
//            ->get();
//        var_dump($data);

        //selectRaw,原生方法,同上
//        $data = DB::table('user')
//            ->selectRaw('id * ? as new_id',[2])
//            ->get();
//        var_dump($data);

        //whereRaw(),orWhereRaw()
//        $data = DB::table('user')
//            ->whereRaw('id >= ?',[15])
//            ->get();
//        var_dump($data);

        //havingRaw(),orHavingRaw()
//        $data = DB::table('user')
//            ->select('name',DB::raw('id as total'))
//            ->havingRaw('id>13')
//            ->get();
//        var_dump($data);

        //orderBy()
//        $data = DB::table('user')
//            ->orderBy('age','desc')
//            ->orderBy('id','desc')
//            ->get();
//        var_dump($data);

        //orderByRaw()
//        $data = DB::table('user')
//            ->orderByRaw('age desc,id desc')
//            ->get();
//        var_dump($data);

        //
        
    }
}
