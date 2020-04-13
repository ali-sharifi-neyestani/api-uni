<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        "user_id",
        "category_id",
        "title",
        "body",
        "slug",
        "seo_title",
        "excerpt",
        "avatar",
        "meta_description",
        "meta_keywords",
        "status",
        "featured",
    ];
}
