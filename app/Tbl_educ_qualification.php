<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_educ_qualification extends Model
{
    protected $guarded = [];
    
    public function tbl_education()
    {
        return $this->hasMany(Tbl_education::class);
    }
}
