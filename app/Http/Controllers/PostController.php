<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        return view('home');
    }
    public function index(){
        return view('blog.index');
    }
    public function show(){
        return view('blog.show');
    }
}
