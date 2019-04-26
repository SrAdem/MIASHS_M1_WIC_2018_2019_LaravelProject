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

}

