<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


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
                'content' => 'required'
            ]);
            $user = random_int(1, 2);
            Posts::create([
                "title" => $request->title,
                "image" => $request->file('tumbnail')->store('headerImages'),
                "content" => $request->content,
                'user_id' => $user,
            ]);
        }
        return redirect()->route('Posts Add')->withSuccess('Task Created Successfully!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
