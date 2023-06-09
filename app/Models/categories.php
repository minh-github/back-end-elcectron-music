<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icons',
    ];
    public function songs()
    {
        return $this->hasManyThrough(Song::class, songCategories::class, 'categories_id', 'songs_id', 'id', 'id');
    }
}
