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
        
     return $this->belongsTo('App\Models\Category');
 }
 public function skills()
 {
     return $this->belongsToMany('App\Models\Skill', 'skills_videos', 'video_id', 'skill_id');
 }
 

public function tags()
{
    return $this->belongsToMany('App\Models\Tag', 'tags_videos');
}
public function comments()
{
    return $this->hasMany('App\Models\Comment');
}
public function scopePublished()
{
    return $this->where('published',1);
}
}
