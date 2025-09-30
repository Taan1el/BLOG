<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PublicController extends Controller
{
    public function index() {
        $posts = Post::simplePaginate(16);
        return view('welcome', compact('posts'));
    }

    public function post ($post){
        $post = Post::findOrFail($post);
        dd($post->toArray());
    }
    
    public function page1() {
        return view('page1');
    }

    public function page2() {
        return view('page2');
    }
}
