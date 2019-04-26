<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentsRequest;

class CommentsController extends Controller
{
    public function store(CommentsRequest $request)
    {
        $post_id = $request->input('post_name');
        $post = \App\Post::where('post_name',$post_id)->first();
        DB::table('comments')->insert(
            ['comment_name' => $request->input('comment_name'),
            'comment_email' => $request->input('comment_email'),
            'comment_content' =>  $request->input('comment_content'),
            'comment_date' => now(),
            'post_id' => $post->id]
        );
        return redirect()->route('posts',$post->post_name);
    }
}
