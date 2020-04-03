<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    //
    protected $primaryKey = 'CustomerID';
    public function wishes()
    {
        return $this->hasMany(wishlistdetail::class,'WishlistID','WishlistID');
    }

}
