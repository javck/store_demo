<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Role;
use Voyager;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    //示範Accessor
    public function getAvatarAttribute($value){
        return Voyager::image($value);
    }

    //示範魔法屬性Accessor
    public function getRoleNameAttribute(){
        $role = Role::findOrFail($this->role_id);
        return $role->display_name;
    }

    //示範Mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = 'name:' . $value;
    }
}
