<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_province extends Model
{
    protected $guarded = [];

    protected $table = "tbl_provinces";

    protected $primaryKey = 'code';
   
    public $incrementing = false;

    public function tbl_municipality()
    {
        return $this->hasMany(Tbl_municipality::class);
   
    }
}
