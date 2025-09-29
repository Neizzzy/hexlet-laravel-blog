@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <h2>Список статей</h2>
    @foreach($articles as $article)
        <div>
            <a href="{{ route('articles.show', $article->id) }}">
                <h3>{{ $article->name }}</h3>
            </a>
            <div>
                {{ Str::limit($article->body, 200) }}
            </div>
        </div>
        <hr>
    @endforeach
@endsection

