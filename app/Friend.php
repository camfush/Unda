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
        'friend1', 'friend2', 'findfriend'
    ];

    public function friend1()
    {
      return $this->belongsTo('App\User', 'friend1');
    }

    public function friend2()
    {
      return $this->belongsTo('App\User', 'friend2');
    }

    public function findfriend()
    {
      return $this->belongsTo('App\User', 'friend1');
    }
}
