<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->get();
        return view('contact', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'thumbnail' => 'nullable',
            'content' => 'required'
        ]);

        $imageName = null;
        if($request->thumbnail != null) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
        }

        $post = Post::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'thumbnail' => $imageName,
            'user_id' => Auth::user()->id,
            'body' => $data['content'],
        ]);

        $blogPost = new BlogPost();
        $blogPost->id = $post->id;
        $blogPost->save();

        Session::flash('success', 'Salvo com sucesso');
        return redirect()->route('blog.show', BlogPost::find($post->id));
    }

    public function create()
    {
        return view('blog.create');
    }
    public function show($id)
    {
        return view('blog.show', ['post' => BlogPost::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('blog.edit', ['post' => BlogPost::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $blogPost = BlogPost::findOrFail($id);

        $blogPost->post->title = $request->input('title');
        $blogPost->post->subtitle = $request->input('subtitle');
        $blogPost->post->thumbnail = $request->input('thumbnail');
        $blogPost->post->body = $request->input('body');

        $blogPost->post->save();
        $blogPost->save();

        Session::flash('success', 'Salvo com sucesso');

        return redirect()->route('blog.show', $blogPost->id);
    }

    public function delete($id)
    {
        BlogPost::destroy($id);
        Post::destroy($id);

        Session::flash('success', 'Removido com sucesso');

        $posts = BlogPost::orderBy('created_at', 'asc')->get();
        return redirect()->route('timeline.index', ['posts' => $posts]);
    }

}