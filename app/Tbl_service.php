<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_service extends Model
{
    protected $guarded = [];

    public function tbl_service_category()
    {
    	return $this->belongsTo(Tbl_service_category::class);
    }
}
