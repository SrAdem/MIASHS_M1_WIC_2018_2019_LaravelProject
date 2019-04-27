@extends('layouts/main')

@section('content')
<h1>Editer un article</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('articles.update', $article->post_name) }}" method="POST" >
    @method('PATCH')
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" name="post_title" value="{{ $article->post_title }}" class="form-control" placeholder="Titre">
    </div>
    <div class="form-group">
        <input type="text" name="post_author" value="{{ $article->author->user_login }}" class="form-control" placeholder="Auteur">
    </div>
    <div class="form-group">
        <textarea name="post_content" rows="4" class="form-control" placeholder="Contenu">{{ $article->post_content }}</textarea>
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection