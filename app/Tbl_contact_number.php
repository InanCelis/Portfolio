<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_contact_number extends Model
{
    protected $guarded = [];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
