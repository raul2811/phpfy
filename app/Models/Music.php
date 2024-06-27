<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Music extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'laravel';

    protected $fillable = [
        'title', 'artist', 'album', 'genre', 'year', 'duration', 'bitrate', 'sample_rate', 'file_size', 'file_path', 'cover_image'
    ];

    // Convert the cover_image attribute to base64 when retrieving from the database
    public function getCoverImageAttribute($value)
    {
        return base64_encode($value);
    }

    // Convert the cover_image attribute from base64 when saving to the database
    public function setCoverImageAttribute($value)
    {
        $this->attributes['cover_image'] = base64_decode($value);
    }
}
