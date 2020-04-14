<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table='categories';
    protected $primaryKey='CategoryId';
    public $timestamps=false;
    //protected $guarded=[];

    public function subcategory()
    {
        return $this->hasMany(subcategory::class,'CategoryID','CategoryID');
    }
}
