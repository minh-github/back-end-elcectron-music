<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class songs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'authors_id',
        'thumb',
        'music_path',
    ];

    public function artists()
    {
        return $this->belongsToMany(artists::class, 'artists_songs');
    }
    public function categories()
    {
        return $this->belongsToMany(categories::class, 'songs_categories');
    }
    public function author()
    {
        return $this->belongsTo(authors::class, 'authors_id', 'id');
    }
}
