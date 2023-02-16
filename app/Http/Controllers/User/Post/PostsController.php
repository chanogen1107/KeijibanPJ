<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users\User;
use App\Models\Posts\Post;
use App\Models\Posts\PostSubCategory;
use App\Models\Posts\PostMainCategory;


class PostsController extends Controller
{
    public function index() {
    //postsテーブル内容を$postsに格納
    // リレーション繋がらない〜
    // dd(Post::with('PostSubCategory')->get());
    $posts=Post::all();

    $Mein_Cates=PostMainCategory::all();

    $Sub_Cates=PostSubCategory::all();

    return view ('Post.index',compact('posts','Mein_Cates','Sub_Cates'));
   }

   public function post() {
    return view ('Post.post');
   }

   public function post_detail() {
    return view ('Post.post-detail');
   }
}
