<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::with('user')->get();

        return view('posts', compact('posts'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->method() === 'POST') {
            $validated = $request->validate([
                'title' => 'required|max:100',
                'tumbnail' => 'required',
                'content' => 'required',
            ]);
            $slug = Str::slug($request->title);
            $uniqueSlug = $slug . '-' . uniqid();
            $user = random_int(1, 2);
            Posts::create([
                'title' => $request->title,
                'slug' => $uniqueSlug,
                'image' => $request->file('tumbnail')->store('headerImages'),
                'content' => $request->content,
                'user_id' => $user,
            ]);
        }
        return redirect()
            ->route('Posts')
            ->withSuccess('Post Created Successfully!');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->method() == 'PUT') {
            $validated = $request->validate([
                'title' => 'required|max:100',
                'tumbnail' => 'required',
                'content' => 'required',
            ]);
            // if ($request->hasFile('newTumbnail')){

            // }
            $slug = Str::slug($request->title);
            // $uniqueSlug = $slug . '-' . uniqid();
            $user = random_int(1, 2);
            Posts::where('slug', $request->slug)->edit([
                'title' => $request->title,
                'image' => $request->file('tumbnail')->store('headerImages'),
                'content' => $request->content,
                'user_id' => $user,
            ]);
            return redirect()
                ->route('Posts')
                ->withSuccess('Post Edited Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()
            ->route('Posts')
            ->withSuccess('Post Deleted Successfully!');
    }
}
