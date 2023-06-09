<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artistsSongs extends Model
{
    use HasFactory;
    protected $fillable = [
        'artists_id',
        'songs_id'
    ];
}
