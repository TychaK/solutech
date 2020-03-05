<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";
    protected $fillable = ['order_number'];

    // relations has many order details...

    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail', 'order_id');
    }
}
