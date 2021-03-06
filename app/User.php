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
    protected $fillable = [
        'name', 'email', 'password', 'roles', 'store_name', 'categories_id', 'store_status',
        'address_one', 'address_two', 'provinces_id', 'regencies_id', 'zip_code', 'country', 'phone_number',
    ];

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
    public function isAdmin()
{
    foreach ($this->roles()->get() as $role)
    {
        if ($role->name == 'ADMIN')
        {
            return true;
        }
    }
}
  public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
     public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
}
