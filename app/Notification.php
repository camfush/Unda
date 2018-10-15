<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'source_user_id', 'source_type', 'content',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function sourceuser()
    {
      return $this->belongsTo('App\User');
    }
}
