<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }
}
