<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class description extends Model
{
    //
    public $timestamps=false;
    protected $primaryKey='DescriptionId';
    protected $guarded=[];
}
