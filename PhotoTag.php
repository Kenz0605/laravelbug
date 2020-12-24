<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PhotoTag extends Model
{
    use HasFactory, Notifiable;
    public $table = 'photo_tag';

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function photo(){
        return $this->belongsTo(Photo::class);
    }
}
