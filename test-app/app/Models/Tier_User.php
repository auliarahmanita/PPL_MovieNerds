<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier_User extends Model
{
    use HasFactory;

    public function tier() {
        return $this->belongsTo(Tier::class, 'tier_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
