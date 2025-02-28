<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function coucou() { 
        return 'HELLO WORLD 2'; 
    } 
    public function Bienvenue() { 
        return 'BIENVENUE'; 
    } 
}

