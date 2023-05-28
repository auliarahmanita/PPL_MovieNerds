<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleLikesDislikes extends Model
{
    protected $table = 'article_likes_dislikes';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'article_id',
        'likes',
        'dislikes',
        // ffsfs
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = time(); // Atau gunakan metode lain untuk menghasilkan nilai unik
        });
    }
}


