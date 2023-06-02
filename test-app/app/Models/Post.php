<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['username', 'content'];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
