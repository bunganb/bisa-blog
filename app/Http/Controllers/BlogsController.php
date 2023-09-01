<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('search')) {
            $posts = Posts::where('title', 'like', '%' . $request->input('search') . '%')->with('user')->paginate(3);
        } else {
            $posts = Posts::with('user')->paginate(3);
        }
        return view('blogPage.list-blog', compact('posts'));
    }
    public function blogBySlug($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('blogPage.detail-blog', compact('post'));
    }
}
