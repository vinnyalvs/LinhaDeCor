<?php


namespace App\Http\Controllers;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id')->paginate(10);
        return view('blog.index', ['posts' => $posts]);
    }




}