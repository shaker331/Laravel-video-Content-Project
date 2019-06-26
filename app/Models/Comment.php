<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = [
        'user_id', 'video_id', 'comment',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id');
    }
}
