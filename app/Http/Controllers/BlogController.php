<?php

namespace App\Http\Controllers;

use App\Post;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::WhereRaw('status = ?', ['publish'])->get();
        return view('blog.index', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        return view('blog.single', compact('post'));
    }

    public function contact()
    {
        return view('blog.contact');
    }

    public function showTag()
    {
        $tags = Tag::all();
        return view('blog.tag', compact('tags'));
    }

    public function showPostTag($id)
    {
        $tag = Tag::find($id);
        $posts = Post::WhereRaw('status = ? AND id = ?', ['publish', (int)$id])->get();
        return view('blog.tagle', compact('tag', 'posts'));
    }

    /**
     * public function showComment($id)
    {
        $comment = Comment::find($id)->posts();
        return view('blog.comment', compact('comment'));
    }*/
}