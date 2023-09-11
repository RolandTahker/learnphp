<?php

namespace App\Controllers;

class PublicController {
    public function home(){
        include __DIR__ . '/../../views/home.php';
    }
    public function about(){
        echo 'about';
    }
}