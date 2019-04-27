@extends('layouts/main')

@section('content')
<h1>Nos articles</h1>

<div class="row">
                <a href="{{ route('articles.create') }}" class="btn btn-success pull-right">Create Article</a>
            </div>
            <br>
            @if (Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
 
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($posts) == 0)
                            <tr>
                                <td colspan="4">No records found!</td>
                            </tr>
                        @else
                            @foreach($posts as $article)
                            <tr>
                                <td>{{ $article->post_title }}</td>
                                <td>{{ $article->author->user_login }} </td>
                                <td>{{ $article->post_content }}</td>
                                <td style="width: 10%">
                                    <a href="{{ route('articles.show', $article->post_name) }}" class="btn btn-success" style="margin-bottom: 10px; width: 70px;">View</a><br>
                                    <a href="{{ route('articles.edit', $article->post_name) }}" class="btn btn-info" style="margin-bottom: 10px; width: 70px;">Edit</a>
 
                                    <form action="{{ route('articles.destroy', $article->post_name) }}" method="post">
                                        @method('DELETE')
                                        @csrf
 
                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
@endsection