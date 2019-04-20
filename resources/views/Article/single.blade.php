@extends('layouts/main')

@section('content')
<h1> {{ $post->post_title}} </h1>
<h3> {{ $nom_auteur}} </h3>

<p> {{ $post->post_content}} </h3>
@endsection