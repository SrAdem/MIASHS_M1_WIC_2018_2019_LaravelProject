@extends('layouts/main')

@section('content')
<h1>Créer un article</h1>

@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<form action="{{ route('articles.store') }}"  method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Titre (2 mots minimum)">
    </div>
    <div class="form-group">
        <input type="text" name="author" class="form-control" placeholder="Adresse mail">
    </div>
    <div class="form-group">
        <textarea name="content" rows="4" class="form-control" placeholder="Votre contenu"></textarea>
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection