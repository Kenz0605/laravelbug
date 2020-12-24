<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Tag extends Model
{
    use HasFactory, Notifiable;

    public function photos(){
        return $this->belongsToMany(Photo::class)->using(PhotoTag::class)->withPivot('id')->withTimestamps();
    }
}
