<?php

namespace App\Http\Controllers;

use App\Post;
// use App\Tag;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        return view('blog.index', compact('posts', 'tags'));
    }

    /**
     * public function showPost($id)
    {
        $post = Post::all()->where('status', 'publish')->first();
        return view('blog.single', compact('post'));
    }*/

    /**
     * public function showTag($id)
    {
        $tag = Tag::find($id)->posts();
        return view('blog.tag', compact('tag'));
    }*/
}


// $user = DB::table('users')->where('name', 'John')->first();
// var_dump($user->name);