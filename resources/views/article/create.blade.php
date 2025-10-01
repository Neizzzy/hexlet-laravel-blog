@extends('layouts.app')

@section('title', 'Добавить статью')

@section('header', 'Добавить статью')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-red-700">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        {{ html()->label('Имя', 'name') }}
        {{ html()->input('text', 'name')->class('border-2 border-rose-400') }}
        {{ html()->label('Содержание', 'body') }}
        {{ html()->textarea('body')->class('border-2 border-rose-400') }}
        {{ html()->submit('Создать')->class('bg-rose-500 px-2 text-white cursor-pointer') }}
    {{ html()->closeModelForm() }}
@endsection
