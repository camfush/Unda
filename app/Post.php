<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'hash', 'length', 'description'
    ];

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function likes()
    {
      return $this->hasMany('App\Reaction')->where('type', 'like');
    }

    public function dislikes()
    {
      return $this->hasMany('App\Reaction')->where('type', 'dislike');
    }

    // SCOPES
    public function scopeSearch($query, $column, $value)
    {
      return $query->where($column, 'LIKE', "%$value%");
    }
}
