<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentsRequest;


class ArticleController extends Controller
{
    //
    function index() {
        $posts = \App\Post::all();
        return view('article', array(
            'posts' => $posts
        ));
    }
    // ::where('post_id',$post->pluck('id'))
    function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first();
        $auteur = $post->author->user_login;
        $comments = \App\Comments::where('post_id','=',$post->id)->get();
        return view('Article/single',array(
            'post' => $post,
            'nom_auteur' => $auteur,
            'commentaires' => $comments
        ));
    }
    public function create($post_name)
    {
        $post = \App\Post::where('post_name',$post_name)->first();
        $auteur = $post->author->user_login;
        $comments = \App\Comments::where('post_id','=',$post->id)->get();
        return view('Article/single',array(
            'post' => $post,
            'nom_auteur' => $auteur,
            'commentaires' => $comments
        ));
    }

    public function store(CommentsRequest $request, $post_name)
    {
        $post = \App\Post::where('post_name',$post_name)->first();
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

