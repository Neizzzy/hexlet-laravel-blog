@extends('layouts.app')

@section('title', 'Главная')

@section('header', 'Hexlet Blog')

@section('content')
    <h2>Welcome to Hexlet blog!</h2>
    <div>
        <a href="{{ route('about') }}">About</a>
    </div>
@endsection
