<?php

namespace App\Http\Controllers;

use DB;
class PostsController
{
    public function show($slug)
    {
        # code...
        //             $postss = [
        // 'first' => '111111',
        // 'second' => ' 222222'

        //     ];
            $post = DB::table('posts')->where('slug', $slug)->first();
            // dd($post);
        // if (!array_key_exists($post, $postss)) {
        //     abort(404);
        //     # code...;
        // }
        return view('post', ['post' => $post]);
    }
}
