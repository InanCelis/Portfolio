<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function tbl_role()
    {
    	return $this->belongsTo(Tbl_role::class);
    }

    public function tbl_user_information()
    {
        return $this->hasMany(Tbl_user_information::class);
    }

    public function tbl_address()
    {
        return $this->hasMany(Tbl_address::class);
    }

    public function tbl_color_theme()
    {
        return $this->hasMany(Tbl_color_theme::class);
    }

    public function tbl_logo()
    {
        return $this->hasMany(Tbl_logo::class);
    }

    public function tbl_contact_number()
    {
        return $this->hasMany(Tbl_contact_number::class);
    }

    public function tbl_media_link()
    {
        return $this->hasMany(Tbl_media_link::class);
    }

    public function tbl_resume()
    {
        return $this->hasMany(Tbl_resume::class);
    }

    public function tbl_skill_category()
    {
        return $this->hasMany(Tbl_skill_category::class);
    }

    public function tbl_service_category()
    {
        return $this->hasMany(Tbl_service_category::class);
    }

    public function tbl_experience()
    {
        return $this->hasMany(Tbl_experience::class);
    }

    public function tbl_education()
    {
        return $this->hasMany(Tbl_education::class);
    }

    public function tbl_audit_trail()
    {
        return $this->hasMany(Tbl_audit_trail::class);
    }
}
