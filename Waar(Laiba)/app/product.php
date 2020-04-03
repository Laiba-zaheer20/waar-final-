<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $primaryKey = 'ProductId';
    public $timestamps=false;
    protected $guarded=[];

  
    public function color()
    {
        return $this->hasOne(color::class,'ProductId','ProductId');
    }

    public function price()
    {
        return $this->hasOne(price::class,'ProductId','ProductId');
    }

    public function description()
    {
        return $this->hasOne(description::class,'ProductId','ProductId');
    }

    public function yard()
    {
        return $this->hasOne(yard::class,'ProductId','ProductId');
    }
    
    public function subcategory()
    {
        return $this->hasOne(subcategorydetail::class,'SubCatId','SubCatId');

    }
}
