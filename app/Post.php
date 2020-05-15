<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'tag1', 'tag2', 'tag3', 'body'];

    public function user()
    {
      return $this->BelongsTo('App\User');
    }
}
