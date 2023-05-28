<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model 
{
    use HasFactory;

    protected $guarded = ['id'];
// 
    protected $with = ['tag', 'author'];

    public function tag() {
        return $this->belongsTo(Tag::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id'); 
    }

    public function scopeFilter($query, array $filter)
    {

        $query->when($filter['search'] ??  false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('konten', 'like', '%' . $search . '%');
            });
        });

        $query->when($filter['tag'] ??  false, function ($query, $tag) {
            return $query->whereHas('tag', function ($query) use ($tag) {
                $query->where('slug', $tag);
            });
        });

        $query->when(
            $filter['author'] ??  false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
            $query->where('username', $author))
        );
    }

    // Model Article

public function comments()
{
    return $this->hasMany(Comment::class)->whereNull('parent_comment_id');
}

}
