<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'publish')->orderBy('id', 'DESC')->limit(1)->get();
        // sidebar recent post
        $recentPosts = Post::where('status', 'publish')->orderBy('id', 'DESC')->limit(4)->get();
        return view('home.index', compact('posts', 'recentPosts'));
    }

    public function berita()
    {
        $posts = Post::where('status', 'publish')->orderBy('id', 'DESC')->paginate(4);
        // sidebar recent post
        $recentPosts = Post::where('status', 'publish')->orderBy('id', 'DESC')->limit(4)->get();
        return view('home.berita.index', compact('posts', 'recentPosts'));
    }

    public function beritaShow($slug)
    {
        $post = Post::where('slug', $slug)->first();
        // sidebar recent post
        $recentPosts = Post::where('status', 'publish')->orderBy('id', 'DESC')->limit(4)->get();
        return view('home.berita.show', compact('post', 'recentPosts'));
    }

    public function contact()
    {
        return view('home.contact');
    }
}
