<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }

}