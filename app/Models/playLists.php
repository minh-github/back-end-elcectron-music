<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playLists extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'thumb',
        'user_id',
    ];

    function songs()
    {
        return $this->hasManyThrough(songs::class, playListsSongs::class, 'play_lists_id', 'id');
    }
}
