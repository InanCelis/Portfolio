<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_skill_category extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function tbl_skill()
    {
        return $this->hasMany(Tbl_skill::class);
    }
}
