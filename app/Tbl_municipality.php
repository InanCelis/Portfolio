<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_municipality extends Model
{
    protected $guarded = [];
    
    protected $table = "tbl_municipalities";

    protected $primaryKey = "code";
   
    public $incrementing = false;
    
    public function tbl_province()
    {
    	return $this->belongsTo(Tbl_province::class);
    }

    public function tbl_barangay()
    {
        return $this->hasMany(Tbl_barangay::class);
   
    }

    
}
