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
                'tumbnail' => 'required|mimes:jpeg,png,jpg',
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
            toast('New Post has been added successfully!', 'success')
                ->position('top-right')
                ->autoClose(5000)
                ->timerProgressBar();

            return to_route('Posts');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if (!$post) {
            return view('errors.404');
        } else {
            if ($request->method() == 'PUT') {
                $validated = $request->validate([
                    'title' => 'required|max:100',
                    'tumbnail' => 'mimes:jpeg,png,jpg',
                    'content' => 'required',
                ]);
                if ($request->hasFile('newTumbnail')) {
                    Storage::delete('public/' . $post->image);
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
                toast('New Post has been Updated successfully!', 'success')
                    ->position('top-right')
                    ->autoClose(5000)
                    ->timerProgressBar();
                return to_route('Posts');
            } elseif ($request->method() == 'GET') {
                return view('admin.update', compact('post'));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        // dd($post->image);
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }
        $post->delete();
        toast('Post has been Deleted successfully!', 'success')
            ->position('top-right')
            ->autoClose(5000)
            ->timerProgressBar();
        return to_route('Posts');
    }
}
