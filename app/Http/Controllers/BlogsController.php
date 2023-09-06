<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->take(3)->get();
        return view('blogPage.index', compact('posts'));
    }
    public function showBlog(Request $request)
    {
        if ($request->input('search')) {
            $posts = Posts::search($request->input('search'));
        } else {
            $posts = Posts::showPost();
        }
        return view('blogPage.list-blog', compact('posts'));
    }
    public function blogBySlug($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('blogPage.detail-blog', compact('post'));
    }
    public function about()
    {
        $users = User::get();
        return view('blogPage.about', compact('users'));
    }
}
