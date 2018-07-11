<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(){
        //先打开redis服务器
        Redis::set('name','Taylor');
        $redis = Redis::get('name');
        var_dump($redis);
    }
}
