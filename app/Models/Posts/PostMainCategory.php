<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostMainCategory extends Model
{
    protected $table = 'post_main_categories';

    protected $fillable = [
        'main_category',
    ];

      public function post_sub_categories()
    {
        return $this->hasMany('App\Models\Posts\PostSubCategory','post_main_category_id');
    }
}
