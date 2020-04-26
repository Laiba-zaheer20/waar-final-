<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $primaryKey = 'OrderID';
    public $timestamps=false;

    public function orderdetail()
    {
        return $this->hasMany(orderdetail::class,'CustomerID','CustomerID');
    }

    public function payment()
    {
        return $this->hasOne(paymentdetail::class,'PaymentID','PaymentID');
    }
}
