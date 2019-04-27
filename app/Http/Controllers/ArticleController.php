<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;


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
        $comments = \App\Comments::where('post_id','=',$post->id)->get();
        return view('Article/single',array(
            'post' => $post,
            'nom_auteur' => $auteur,
            'commentaires' => $comments
        ));
    }

    public function create()
    {
        return view('articlecreate');
    }

    public function store(Request $request)
    {
       
        request()->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);
        //TODO: test si l'utilisateur existe sinon l'ajouter
        if(\App\User::where('user_login',$request->input('author'))->count() > 0) {
            $auteur = \App\User::where('user_login',$request->input('author'))->first();
            $name = explode(' ',$request->input('title'));
            DB::table('posts')->insert(
                    ['post_author' => $auteur->id,
                    'post_title' => $request->input('title'),
                    'post_content' =>  $request->input('content'),
                    'post_date' => now(),
                    'post_status' => 'test',
                    'post_name' => $name[0],
                    'post_type' => 'article',
                    'post_category' => 'test'
                    ]

            ); 
        }
        else {
            return redirect()->route('articles.index')
                            -> with('success','Auteur non enregistré dans notre Base de Données');
        }
         //redirect to article index page
        return redirect()->route('articles.index')
                        ->with('success','Article ajouté avec succès');
    }

    public function edit($post_name)
    {
        $post = \App\Post::where('post_name',$post_name)->first();
        return view('articleedit', ['article' => $post]);
    }
 
    public function update(Request $request, $post_name)
    {
        request()->validate([
            'post_title' => 'required',
            'post_author' => 'required',
            'post_content' => 'required',
        ]);
 
        if(\App\User::where('user_login',$request->input('post_author'))->count() > 0) {
            $auteur = \App\User::where('user_login',$request->input('post_author'))->first();
            $name = explode(' ',$request->input('title'));
            DB::table('posts')->where('post_name',$post_name)->update(
                ['post_author' => $auteur->id,
                'post_title' => $request->input('post_title'),
                'post_content' =>  $request->input('post_content'),
                'post_date' => now(),
                'post_status' => 'test',
                'post_name' => $name[0],
                'post_type' => 'article',
                'post_category' => 'test'
                ]
            );
        }
        else {
            return redirect()->route('articles.index')
                            -> with('success','Auteur non enregistré dans notre Base de Données');
        }
         //redirect to article index page
        return redirect()->route('articles.index')
                        ->with('success','Article ajouté avec succès'); 
 
    }
 
    public function destroy($post_name)
    {
        $post = \App\Post::where('post_name',$post_name)->first();
        $post->delete();
        return redirect()->route('articles.index')
                        ->with('success','Article deleted successfully');
    }
}