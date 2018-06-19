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
class GoodsController extends Controller
{
    public function index(){
        echo "goods";
    }

}