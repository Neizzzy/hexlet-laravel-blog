@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
    <h2>Список статей</h2>
    <a href="{{ route('articles.create') }}" class="text-rose-500">+ Добавить статью</a>
    <div class="flex flex-col gap-6 my-10">
        @foreach($articles as $article)
            <div class="border-2 rounded-sm border-rose-500 p-4">
                <a href="{{ route('articles.show', $article->id) }}" class="text-xl font-bold">{{ $article->name }}</a>
                <div>
                    {{ Str::limit($article->body, 200) }}
                </div>
                <div class="flex gap-4 pt-2">
                    <a href="{{ route('articles.edit', $article->id) }}" class="text-rose-500">Редактировать</a>
                    <a href="{{ route('articles.destroy', $article->id) }}" data-method="delete" data-confirm="Вы уверены?" rel="nofollow" class="text-red-700">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
