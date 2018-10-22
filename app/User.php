<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
      return $this->hasMany('App\Post', 'user_id');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function reactions()
    {
      return $this->hasMany('App\Reaction');
    }

    public function friends()
    {
      return $this->hasMany('App\Friend', 'friend1');
    }

    public function friends2()
    {
      return $this->hasMany('App\Friend', 'friend2');
    }

    public function notifications()
    {
      return $this->hasMany('App\Notification');
    }

    public function getTimelineAttribute()
    {
      return Post::all();
    }
}
