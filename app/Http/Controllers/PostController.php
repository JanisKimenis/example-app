<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:255',
            'content' => 'required',
        ]);
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.index');
    }
    public function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }
    public function destroy_get(Post $post){
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Ziņa veiksmīgi izdzēsta (GET)!');
    }
}
