<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    //
   public $timestamps=false;
   protected $primaryKey='PriceId';
   protected $guarded=[];
}
