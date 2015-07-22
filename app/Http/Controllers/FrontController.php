<?php

namespace App\Http\Controllers;

use App\Post;
// use App\Tag;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('front.index', compact('posts'));
    }

    /**
     * public function showPostByCategory($id)
    {
        $posts = Category::find($id)->posts()->published()->get();
        return view('front.category', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::all()->where('status', 'publish')->first();
        return view('front.single', compact('post'));
    }

    public function showTag($id)
    {
        $tag = Tag::find($id)->posts();
        return view('front.tag', compact('posts'));
    }*/
}
