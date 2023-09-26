<?php

namespace App\Controllers;


use App\Models\Article;

class PublicController {
    public function home(){
        $articles = Article::all();
        view('home', compact('articles'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        setcookie('mycookie', 'tasty');
        var_dump($_COOKIE);
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}