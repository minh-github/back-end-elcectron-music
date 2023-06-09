<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class songAuthors extends Model
{
    use HasFactory;
    protected $fillable = [
        'songs_id',
        'authors_id'
    ];
}
