<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
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
        return view('post.index', compact('posts'));
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('post.single', compact('post'));
    }


    public function create()
    {
        $tags = Tag::all();
        return view('post.create', compact('tags'));
    }


    public function store(Request $request)
    {
        $post = Post::create($request->all());

        if($request->hasFile('thumbnail_link'))
        {
            $file = $request->file('thumbnail_link');
            $ext = $file->getClientOriginalExtension();
            $fileName = str_random(12) . '.' . $ext;

            $file->move('./assets/upload', $fileName);

            $post->thumbnail_link = $fileName; // deux lignes pour faire un update
        }
        $post->save();

        return redirect()->to('post')->with('message', 'success');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        Post::find($id)->update($request->all());
        return redirect()->to('post')->with('message', 'success update');
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