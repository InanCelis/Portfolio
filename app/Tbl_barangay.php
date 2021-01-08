<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_barangay extends Model
{
    protected $guarded = [];

    // protected $table = "tbl_barangays";

    public function tbl_municipality()
    {
    	return $this->belongsTo(Tbl_municipality::class);
    }

    public function tbl_address()
    {
    	return $this->hasMany(Tbl_address::class);
    }
}
