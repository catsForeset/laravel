<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //数据表
    protected $table = 'user';
    //批量赋值白名单，可用create来添加以下数据
    protected $fillable = ['id','name','pass','status','age','created_at','updated_at'];
    //laravel默认有created_at、updated_at，以下设置为时间戳，不设置则为时间模式Y-m-d H:i:s
    protected $dateFormat = 'U';
    //禁止时间戳模式，不维护created_at、updated_at
//    public $timestamps = false;
    //设置时间戳为别的字段
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';
    //设置主键为aid
//    protected $primaryKey = 'aid';
}
