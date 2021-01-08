<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_role extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
   
    }
}
