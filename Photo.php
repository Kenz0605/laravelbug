<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Utils;

class Photo extends Model
{
    use HasFactory, Notifiable;
    public function users()
    {
    return $this->belongsToMany(User::class)->using(PhotoUser::class)->withPivot("id")->withTimestamps();
    }


    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->using(PhotoTag::class)->withPivot('id')->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
