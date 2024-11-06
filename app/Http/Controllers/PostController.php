<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->user_id = Auth::id();
        $post->save();

        return response()->json(['message' => 'Post created successfully']);
    }

    public function listByCategory($categoryId)
    {
        $posts = Post::where('category_id', $categoryId)->get();
        return response()->json($posts);
    }
}
