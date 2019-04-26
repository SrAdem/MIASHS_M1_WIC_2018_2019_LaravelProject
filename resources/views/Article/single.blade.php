@extends('layouts/main')

@section('content')
<h1> {{ $post->post_title}} </h1>
<h3> Auteur : {{ $nom_auteur}} </h3>

<p> {{ $post->post_content}} </h3>

<ol>
@foreach ( $commentaires as $commentaire )
    <li> 
        <ul>
            <li> Titre : {{$commentaire->comment_name}}</li>
            <li> Date : {{$commentaire->comment_date}}</li>
            <li> Auteur : {{$commentaire->comment_email}}</li>
            <li> Message : {{$commentaire->comment_content}}</li>
        </ul>
    </li>

@endforeach
</ol>

<p> Ajouter un commentaire : </p>
<form action="{{ url('/articles/{post_name}') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control {{ $errors->has('comment_name') ? 'is-invalid' : '' }}" name="comment_name" id="comment_name" 
            placeholder="Titre" value="{{ old('comment_name') }}"> {!! $errors->first('comment_name', '
                <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('comment_email') ? 'is-invalid' : '' }}" name="comment_email" id="comment_email" 
            placeholder="Votre email" value="{{ old('comment_email') }}"> {!! $errors->first('comment_email', '
                <div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        <textarea class="form-control {{ $errors->has('comment_content') ? 'is-invalid' : '' }}" name="comment_content" id="comment_content" 
        placeholder="Votre message">{{ old('comment_content') }}</textarea> {!! $errors->first('comment_content', '
            <div class="invalid-feedback">:message</div>') !!}
    </div>
    <button type="submit" class="btn btn-secondary">Poster !</button>
</form>
@endsection