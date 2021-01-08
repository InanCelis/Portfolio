<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_media_link extends Model
{
    protected $guarded = [];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
