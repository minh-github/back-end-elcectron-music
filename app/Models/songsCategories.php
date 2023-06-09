<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class songsCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'songs_id',
        'categories_id',
    ];
}
