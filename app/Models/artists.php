<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artists extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'avatar',
        'nickname',
    ];

    public function songs()
    {
        return $this->hasManyThrough(Song::class, artistsSongs::class, 'artist_id', 'song_id', 'id', 'id');
    }
}
