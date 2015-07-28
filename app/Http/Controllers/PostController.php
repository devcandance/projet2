<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }


    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts', 'tags'));
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('post.single', compact('post'));
    }

    public function create()
    {
        $posts = Post::all();
        return view('post.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        if($request->hasFile('thumbnail_link'))
        {
            $file = $request->file('thumbnail_link');
            $ext = $file->getClientOriginalExtension();
            $fileName = str_random(12) . '.' . $ext;

            $file->move('./upload', $fileName);

            $post->link_thumbnail = $fileName; // deux lignes pour faire un update
            $post->save();
        }

        // Post::create($request->all());

        return redirect()->to('post')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->to('post')->with('message', 'success');
    }
}