<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index ()
    {
        $articles = [
            [
                'title' => 'Noir & lumière bleue', 
                'body' => 'Il était une fois dans un village de caché de l\'afrique, vivait une fille de race noir aux yeux très très bleus.' 
            ],

            [
                'title' => 'Noir & lumière bleue', 
                'body' => 'Il était une fois dans un village de caché de l\'afrique, vivait une fille de race noir aux yeux très très bleus.' 
            ],

            [
                'title' => 'Noir & lumière bleue', 
                'body' => 'Il était une fois dans un village de caché de l\'afrique, vivait une fille de race noir aux yeux très très bleus.' 
            ],
        ];

        return view('layouts.articles', compact('articles'));

    }
}
