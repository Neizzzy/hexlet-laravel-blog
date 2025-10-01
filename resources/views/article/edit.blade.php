@extends('layouts.app')

@section('title', 'Редактировать статью')

@section('header', 'Редактировать статью')

@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article->id))->open() }}
    @include('article.form');
    {{ html()->submit('Обновить')->class('bg-rose-500 px-2 text-white cursor-pointer') }}
    {{ html()->closeModelForm() }}
@endsection
