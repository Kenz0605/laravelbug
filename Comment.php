<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function photo(){
        return $this->BelongsTo(Photo::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Comment::class, 'comment_id');
    }
    public function replyTo()
    {
        return $this->belongsTo(Comment::class, 'comment_id', 'id');
    }
}
