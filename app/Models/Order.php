<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\7\5 0005
 * Time: 10:06
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    protected $table='order';

    public function getDateFormat()
    {
        return 'U';
    }
}