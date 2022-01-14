<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);

        return view('home', compact('posts'));
    }

    public function create(){

        return view('create');
    }
    public function store(){
        $data = request()->validate([
            'title' => 'string',
            'text' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('home');
    }
}
