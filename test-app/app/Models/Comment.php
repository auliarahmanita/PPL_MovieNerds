<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comments';
    public $timestamps = false;
    protected $fillable = [
        'article_id',
        'parent_comment_id',
        'user_id',
        'comment_text',
        'created_at',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
