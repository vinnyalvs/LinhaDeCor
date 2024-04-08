<?php

namespace App\Http\Controllers;

use App\Post;
use App\TimelinePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TimelineController extends Controller
{

       public function index()
    {
        $posts = TimelinePost::orderBy('event_date', 'asc')->get();
        return view('timeline.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('timeline.create');
    }

    public function getTimelinePost($id) {
        return TimelinePost::find($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'content' => 'required',
            'event_date' => 'required|date',
            'timeline_type' => 'required',
            'thumbnail' => 'nullable'
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

        $timelinePost = new TimelinePost();
        $timelinePost->id = $post->id;
        $timelinePost->timeline_type  = $data['timeline_type'];
        $timelinePost->event_date = $data['event_date'];
        $timelinePost->save();

        return redirect()->route('timeline.show', TimelinePost::find($post->id));
    }

    public function show($id)
    {
        $currentPost = TimelinePost::findOrFail($id);
        $nextPost = TimelinePost::whereDate('event_date', '>', $currentPost->event_date)->orderBy('event_date', 'asc')->first();
        return view('timeline.show', ['post' => $currentPost , 'nextPost' => $nextPost]);
    }

    public function edit($id)
    {
        return view('timeline.edit', ['post' => TimelinePost::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'event_date' => 'required|date',
            'timeline_type' => 'required',
            'thumbnail' => 'nullable'
        ]);

        $timelinePost = TimelinePost::findOrFail($id);

        $imageName = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('images'), $imageName);

        $timelinePost->post->title = $data['title'];
        $timelinePost->post->subtitle = $data['subtitle'];

        $timelinePost->post->thumbnail = $imageName;
        $timelinePost->post->body = $data['content'];
        $timelinePost->event_date = $data['event_date'];
        $timelinePost->timeline_type = $data['timeline_type'];
        $timelinePost->post->save();
        $timelinePost->save();

        Session::flash('success', 'Salvo com sucesso');

        return redirect()->route('timeline.show', $timelinePost->id);
    }

    public function delete($id)
    {
        TimelinePost::destroy($id);
        Post::destroy($id);
        $posts = TimelinePost::orderBy('event_date', 'asc')->get();
        return redirect()->route('timeline.index', ['posts' => $posts]);
    }
}
