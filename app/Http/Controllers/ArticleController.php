<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function index() {
        $posts = \App\Post::all();
        return view('article', array(
            'posts' => $posts
        ));
    }
    
    function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first();
        $auteur = $post->author->user_login;
        return view('Article/single',array(
            'post' => $post,
            'nom_auteur' => $auteur
        ));
    }
}
