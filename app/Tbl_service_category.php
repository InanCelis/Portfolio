<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_service_category extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function tbl_service()
    {
        return $this->hasMany(Tbl_service::class);
    }
}
