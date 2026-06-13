<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $latestPosts = Post::with('category')->latest()->take(3)->get();

        return view('home', compact('latestPosts'));
    }
    public function index(){
        return view('blog.index');
    }
    public function show($slug){
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
