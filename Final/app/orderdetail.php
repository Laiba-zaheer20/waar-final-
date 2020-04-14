<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    //
    public $timestamps=false;
   protected $primaryKey='OrderDetailID';
   protected $guarded=[];
}
