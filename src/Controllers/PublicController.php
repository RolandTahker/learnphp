<?php

namespace App\Controllers;

class PublicController {
    public function home(){
        $name = 'Roland';
        $num = 10;
        view('home', compact('name', 'num'));
    }
    public function about(){
        view('about');
    }
}