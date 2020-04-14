<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $table='cities';
    protected $primaryKey='CityID';
    public $timestamps=false;
}
