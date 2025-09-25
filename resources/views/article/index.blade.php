@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <h2>Список статей</h2>
    @foreach($articles as $article)
        <div>
            <h2>{{ $article->name }}</h2>
            <div>
                {{ Str::limit($article->body, 200) }}
            </div>
        </div>
        <hr>
    @endforeach
@endsection

