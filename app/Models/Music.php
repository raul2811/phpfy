<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Music extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'laravel';

    protected $fillable = [
        'title', 'artist', 'album', 'genre', 'year', 'duration', 'bitrate', 'sample_rate', 'file_size', 'file_path'
    ];
}
