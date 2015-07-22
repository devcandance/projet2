<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    /**
     * public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }*/


    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('post.single', compact('post'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        if($request->hasFile('link_thumbnail'))
        {
            $file = $request->file('link_thumbnail');
            $ext = $file->getClientOriginalExtension();
            $fileName = str_random(12) . '.' . $ext;

            $file->move('./upload', $fileName);

            $post->link_thumbnail = $fileName; // deux lignes pour faire un update
            $post->save();
        }

        // Post::create($request->all());

        return redirect()->to('post')->with('message', 'success');
    }
}