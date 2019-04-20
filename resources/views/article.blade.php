@extends('layouts/main')

@section('content')
<h1>Nos articles</h1>

<ul>
@foreach ( $posts as $post )
    <li><a href="http://localhost:8000/articles/{{ $post->post_name }}"> {{ $post->post_title }} </a></li>

@endforeach
</ul>
@endsection