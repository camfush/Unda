<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user1', 'user2',
    ];

    public function user1()
    {
      return $this->hasMany('App\User', 'friend1');
    }

    public function user2()
    {
      return $this->hasMany('App\User', 'friend2');
    }
}
