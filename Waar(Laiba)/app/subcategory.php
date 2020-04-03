<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    //
    public $timestamps=false;
    protected $table="subcategories";
    protected $primaryKey='SubCatId';
    protected $guarded=[];

    public function product()
    {
        return $this->hasMany(product::class,'SubCatID','SubCatID');
    }

    public function category()
    {
        return $this->belongsTo(category::class,'CategoryID','CategoryID');
    }
}
