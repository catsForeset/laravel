<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

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
//            ->orderByRaw('age-id desc')
//            ->get();
//        var_dump($data);






        //joins,返回一个object(Illuminate\Support\Collection)对象
//        //内链接，inner join,只搜索出满足join()的数据
//        $user = DB::table('user')
//            ->join('order','user.id','=','order.user_id')
//            ->select('user.*','order.orderno','order.price')
//            ->get();
//        var_dump($user);
//
//        //外链接，left join，搜索满足条件的所有数据
//        //如果满足leftJoin，则搜索字段数据为搜索结果；如果不满足leftJoin，则搜索字段数据为null
//        $user = DB::table('user')
//            ->leftJoin('order','user.id','=','order.user_id')
//            ->select('user.*','order.orderno','order.price')
//            ->get();
//        dd($user);

//        //交叉链接，Cross Join
//        //交叉连接在第一个表和连接之间生成笛卡尔积
//        $user = DB::table('user')
//            ->crossJoin('order')
//            ->get();
//        dd($user);

//        //高级join
//        $data = DB::table('user')
//            ->join('order',function ($join){
//                $join->on('user.id','=','order.user_id')->orOn('user.id','>','order.id');
//            })
//            ->get();
//        var_dump($data);
//        dd($data);
//
//        //join+where
//        $data = DB::table('user')
//            ->join('order',function ($join){
//                $join->on('user.id','=','order.user_id')
//                    ->where('user.id','>',15);
//            })
//            ->get();
//        var_dump($data);
//        dd($data);





        //unions
        //union,满足其中一个查询即可
//        $first =  DB::table('order')
//            ->whereNotNull('created_at');
//        $order = DB::table('order')
//            ->whereNull('updated_at')
//            ->union($first)//unionAll()同
//            ->get();
//        var_dump($order);
//        dd($order);





//        //where
//        $user = DB::table('user')
//            //'<>'不等于，相当于'!='
//            //可传递数组到where中
//            ->where([
//                ['age','<>',45],
//                ['id','>=',15]
//
//            ])
//            ->get();
//        //同上，where联用，同时满足所有where
//        $user = DB::table('user')
//            //'<>'不等于，相当于'!='
//            //可传递数组到where中
//            ->where('age','<>',45)
//            ->where('id','>=',15)
//            ->get();
//        var_dump($user);

        //orWhere,满足where或orWhere即可
//        $user = DB::table('user')
//            ->where('age','<>',45)
//            ->orWhere('id','>=',15)
//            ->get();

//        //whereBetween,验证字段的值位于两个值之间(包括)
//        $user = DB::table('user')
//            ->whereBetween('age',[30,45])
//            //whereNotBetween,验证字段的值位于两个值之外(不包括)
////            ->whereNotBetween('age',[20,30])
//            ->get();
//        var_dump($user);

//        //whereIn,验证字段的值在指定的数组内
//        $user = DB::table('user')
//            ->whereIn('age',[20,30,45])
//            //whereNotIn,验证字段的值不在指定的数组内
////            ->whereNotIn('age',[20,30,45])
//            ->get();
//        var_dump($user);

//        //whereNull,验证字段值为null
//        $user = DB::table('user')
//            ->whereNull('name')
//            //whereNotIn,验证字段值不为bull
////            ->whereNotNull('name')
//            ->get();
//        var_dump($user);

        //whereColumn,验证两个字段值是否相等
//        $order = DB::table('order')
//            ->whereColumn('created_at','updated_at')
//            ->get();
//        $order = DB::table('order')
//            ->whereColumn([
//                ['created_at','<','updated_at'],
//                ['user_id','!=','store_id']
//            ])
//            ->get();
//        var_dump($order);

        //参数分组
        //等价于SELECT * FROM `user` WHERE `name`='mm' OR(`status`=10 and age>20)
//        $user = DB::table('user')
//            ->where('name','=','mm')
//            ->orWhere(function($query){
//                //此闭包 接受一个查询构造器实例
//                $query->where('status',10)->where('age','>',20);
//            })
//            ->get();
//        var_dump($user);

        //
//        $user = DB::table('user')
//            ->whereExists(function ($query){
//                $query->select(DB::raw(1))
//                    ->from('order')
//                    ->whereRaw('order.user_id = user.id');
//            })
//            ->get();
//        var_dump($user);

//        //latest/oldest，根据最晚/最早时间来查询，默认查询created_at列，可以选择其他列
//        $user = DB::table('user')->latest()->first();
//        $user = DB::table('user')->latest('updated_at')->get();
//        var_dump($user);

        //having,用于限制输出结果，特别是限制group by的输出结果
//        $user = DB::table('user')
//            //使用group by的时候不要包括id，因为不能形成组
//            ->select('name',DB::raw('avg(age) as avg_age'))
//            ->groupBy('name')
//            //对查询结果进行限制
//            ->having('avg_age','>',20)
//            ->get();
        //多参数
//        $user = DB::table('user')
//            ->select('name','status')
//            ->groupBy('name','status')
//            ->having('status','<>',1)
//            ->get();
//        var_dump($user);

//        //skip/take,从第4个参数起，（从0开始）获取5个参数。
//        $user = DB::table('user')->skip(3)->take(5)->get();
//        //offset/limit,从第1个参数起，（从0开始）获取3个参数。
//        //数据库原生：select * from user limit 3 offset 0
//        $user = DB::table('user')->offset(0)->limit(3)->get();
//        var_dump($user);

        //when
//        $role = '';//false
////        $role = 'mm';//true
//        $user = DB::table('user')
//            //当when的第一个参数($role)为true的时候，才会执行第二个参数（闭包）的查询
//            ->when($role,function ($query) use ($role){
//                return $query->where('name',$role);
//            })
//            ->get();
//        $user = DB::table('user')
//            ->when($role,function ($query) use ($role){
//                return $query->where('name',$role);
//            },function ($query){
//                //当第一个参数不为true时，执行第三个参数（闭包）的查询
//                return $query->where('status',10)->orderBy('age','desc');
//            })
//            ->get();
//        var_dump($user);





        //insert，返回bool值
//        $user = DB::table('user')->insert([
//            ['name'=>'Tom','pass'=>'TomPass','age'=>20],
//            ['name'=>'ZhangWei','pass'=>'ZhangWeiPass','age'=>23]
//        ]);
        //insertGetId如果数据库表有自增id，可以返回id(int)值
//        $user = DB::table('user')->insertGetId(
//            ['name'=>'Alex','pass'=>'AlexPass','age'=>50]
//        );
//        var_dump($user);

        //update,返回受到影响的行数(int)
//        $user = DB::table('user')->where('id','11')
//            ->update(['name'=>'AAA','status'=>10]);
//        var_dump($user);

        //delete,返回受到影响的行数(int)
//        $user = DB::table('user')->where('id','13')
//            ->delete();
//        //同上，删除id为13的行
//        $user = DB::table('user')->delete(13);
//        var_dump($user);




        //increment，decrement.自增/自减,返回受影响的行数
        //默认自增1
//        $order = DB::table('order')->increment('price');
        //设置自增值
//        $order = DB::table('order')->increment('price',5);
        //指定要更新的字段
//        $order = DB::table('order')->increment('price',5,['id'=>2]);
//
////        $order = DB::table('order')->decrement('price');
////        $order = DB::table('order')->decrement('price',5);
//        var_dump($order);
    }


    public function paginate(){
//        $user = DB::table('user')->paginate(2);
        //simplePaginate不显示有多少页，只显示上一页/下一页(Previous/Nex)
//        $user = DB::table('user')->simplePaginate(2);
//        return view('paginate',['user'=>$user]);

        //同上
//        $order = Order::paginate(2);
//        $order = Order::simplePaginate(2);
//        return view('paginate',['order'=>$order]);

        $order = Order::simplePaginate(2);
        return $order;
        return view('paginate',['order'=>$order]);

    }
}
