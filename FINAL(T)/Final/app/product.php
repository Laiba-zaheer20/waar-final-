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
        return $this->hasOne(color::class,'ColorID','ColorID');
    }

    public function price()
    {
        return $this->hasOne(price::class,'PriceID','PriceID');
    }

    public function description()
    {
        return $this->hasOne(description::class,'DescriptionID','DescriptionID');
    }

    public function yard()
    {
        return $this->hasOne(yard::class,'YardID','YardID');
    }
    
    public function subcategory()
    {
        return $this->hasOne(subcategorydetail::class,'SubCatId','SubCatId');

    }
}
