<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\5\30 0030
 * Time: 21:55
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;//或者 use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ValidateController extends Controller
{
    public function lists(){
        return view('validate.list');
    }

    public function post(Request $request){
        $validator=$request->validate([
            'name'=>'required',
            'pass'=>'required',
            'email'=>'required',
            'tel'=>'required',
        ]);
        echo 'ok';

    }

}