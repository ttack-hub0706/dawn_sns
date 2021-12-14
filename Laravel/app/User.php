<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setAttribute($key, $value)
    {
      if ($key !== $this->getRememberTokenName()) {
        parent::setAttribute($key, $value);
      }
    }

    public function follow()
    {
      return $this->hasMany('App\Follow','follower_id');
    }

    public function follower()
    {
      return $this->hasMany('App\Follow','follow_id');
    }
}
