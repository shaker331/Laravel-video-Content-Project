<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $fillable = [
        'name',
    ];
    
 public function videos()
 {
     return $this->belongsToMany('App\Models\Video', 'skills_videos', 'video_id', 'skill_id');
 }
}
