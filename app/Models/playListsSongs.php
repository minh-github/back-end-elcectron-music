<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playListsSongs extends Model
{
    use HasFactory;
    protected $fillable = [
        'play_lists_id',
        'songs_id',


    ];
}
