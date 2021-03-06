<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        $posts = Post::all();
        
        return view('blog', compact('posts'));
    }    
}
