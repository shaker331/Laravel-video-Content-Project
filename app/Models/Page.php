<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   
    protected $fillable = [
        'name', 'meta_keywords', 'meta_desc','desc',
    ];
}
