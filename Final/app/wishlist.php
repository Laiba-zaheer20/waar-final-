<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    //
    protected $primaryKey='WishlistID';
    public $timestamps=false;

    public function wishlistdetail()
    {
        return $this->hasOne(wishlistdetail::class,'WishlistID','WishlistID');
    }

}
