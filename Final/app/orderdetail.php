<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    //
    public $timestamps=false;
   protected $primaryKey='OrderDetailID';
   protected $guarded=[];

   public function status()
   {
       return $this->hasOne(statusdetail::class,'StatusID','StatusID');
   }

   public function product()
   {
       return $this->hasOne(product::class,'ProductID','ProductID');
   }
}
