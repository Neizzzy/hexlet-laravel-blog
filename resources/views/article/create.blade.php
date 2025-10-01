@extends('layouts.app')

@section('title', 'Добавить статью')

@section('header', 'Добавить статью')

@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        @include('article.form');
        {{ html()->submit('Создать')->class('bg-rose-500 px-2 text-white cursor-pointer') }}
    {{ html()->closeModelForm() }}
@endsection
