<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_skill extends Model
{
    protected $guarded = [];

    public function tbl_skill_category()
    {
    	return $this->belongsTo(Tbl_skill_category::class);
    }
}
