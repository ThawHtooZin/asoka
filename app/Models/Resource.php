<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Resource extends Model
{
    protected $fillable = ['name', 'description', 'video_id', 'pdf'];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
