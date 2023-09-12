<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()
            ->take(3)
            ->get();
        return view('blogPage.index', compact('posts'));
    }
    public function showBlog(Request $request)
    {
        if ($request->input('search')) {
            $posts = Posts::search($request->input('search'));
        } else {
            $posts = Posts::showPost();
        }
        $data = [
            'posts' => $posts,
            'search' => $request->input('search'),
        ];
        return view('blogPage.list-blog', $data);
    }
    public function blogBySlug($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if (!$post) {
            return view('errors.404');
        } else {
            return view('blogPage.detail-blog', compact('post'));
        }
    }
    public function about()
    {
        $users = User::get();
        return view('blogPage.about', compact('users'));
    }
}
