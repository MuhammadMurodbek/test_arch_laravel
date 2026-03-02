<?php

namespace App\Actions;



use App\Models\Post;
use Illuminate\Http\Request;

class GetAuthorsAction
{
    public function handle(){
        $posts = Post::with('user');

        return $posts->pluck('user');
    }
}
