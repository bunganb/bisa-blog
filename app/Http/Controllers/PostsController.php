<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('search')) {
            $posts = Posts::search($request->input('search'));
        } else {
            $posts = Posts::showPost();
        }
        return view('admin.posts', compact('posts'));
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
                'image' => $request->file('tumbnail')->store('headerImages', 'public'),
                'content' => $request->content,
                'user_id' => $user,
            ]);
            Alert::success('Success', 'Added Successfully')->persistent();
            session()->forget('sweetalert.alert');
            return redirect('/posts');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if ($request->method() == 'PUT') {
            // dd($request->all());
            $validated = $request->validate([
                'title' => 'required|max:100',
                // 'tumbnail' => 'required',
                'content' => 'required',
            ]);
            if ($request->hasFile('newTumbnail')) {
                Storage::delete($post->image);
                // Handle the new image upload
                $newImage = $request->file('newTumbnail')->store('headerImages', 'public');
                $post->image = $newImage;
            }
            $slug = Str::slug($request->title);
            $uniqueSlug = $slug . '-' . uniqid();
            $user = random_int(1, 2);
            Posts::where('slug', $post->slug)->update([
                'title' => $request->title,
                'slug' => $uniqueSlug,
                'image' => $post->image,
                'content' => $request->content,
                'user_id' => $user,
            ]);
            // $post->refresh();
            Alert::success('Success', 'Updated Successfully')->persistent();
            session()->forget('sweetalert.alert');
            return redirect('/posts');
        } elseif ($request->method() == 'GET') {
            return view('admin.update', compact('post'));
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
        Alert::success('Success', 'Post Deleted Successfully')->persistent(false);
        session()->forget('sweetalert');
        return redirect('/posts');
    }
}
