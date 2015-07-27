<?php

namespace App\Http\Controllers;

use App\Post;
// use App\Tag;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('blog.index', compact('posts', 'comments'));
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        $comments = Comment::whereRaw('status = ? AND post_id = ?', ['publish', (int)$id])->get();
        return view('blog.single', compact('post', 'comments'));
    }

    public function contact()
    {
        return view('blog.contact');
    }

    /**
     * public function showTag($id)
    {
        $tag = Tag::find($id)->posts();
        return view('blog.tag', compact('tag'));
    }*/

    /**
     * public function showComment($id)
    {
        $comment = Comment::find($id)->posts();
        return view('blog.comment', compact('comment'));
    }*/
}