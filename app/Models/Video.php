<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    protected $fillable = [
        'name', 'meta_keywords', 'meta_des','youtube','desc','published','user_id','category_id','image',
    ];
    public function user()
        {
            return $this->belongsTo('App\Models\User', 'user_id');
        }
 public function category()
 {
        
     return $this->belongsTo('App\Models\Category', 'category_id');
 }
 public function skills()
 {
     return $this->belongsToMany('App\Models\Skill', 'skills_videos', 'video_id', 'skill_id');
 }
 

public function tags()
{
    return $this->belongsToMany('App\Models\Tag', 'tags_videos', 'video_id', 'tag_id');
}
public function comments()
{
    return $this->hasMany('App\Models\Comment');
}
}
