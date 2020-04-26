<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlistdetail extends Model
{
    //
    protected $primaryKey='WishlistDetailID';
    public $timestamps=false;


    public function product()
    {
       return $this->hasOne(product::class,'ProductID','ProductID');
    }
}
