<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        # code...
            $postss = [
'first' => '111111',
'second' => ' 222222'

    ];

    if (! array_key_exists($post, $postss) ) {
        abort(404);
        # code...;
    }
    return view('post', ['post' => $postss[$post]]);
    }
}
