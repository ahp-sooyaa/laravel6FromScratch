<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // same use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        // $posts = DB::table('posts')->where('slug', $slug)->first();
        //$posts = Post::where('slug', $slug)->firstOrFail();
        // if (!$posts) {
        //     abort(404);
        // }

        return view(
            'post',
            [
                'post' => Post::where('slug', $slug)->firstOrFail()
            ]
        );
    }
}
