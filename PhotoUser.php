<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PhotoUser extends Pivot
{
    use HasFactory;
    public $table = 'photo_user';

public function user(){
    return $this->belongsTo(User::class);

}

public function photo(){
    return $this->belongsTo(Photo::class);
}
}
