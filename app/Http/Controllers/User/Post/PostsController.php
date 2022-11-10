<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
    return view ('Post.index');
   }

   public function post() {
    return view ('Post.post');
   }
}
