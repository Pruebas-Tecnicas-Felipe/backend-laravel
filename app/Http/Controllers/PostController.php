<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->category_id = $validated['category_id'];
        $post->save();

        return response()->json(['message' => 'Post created successfully']);
    }

    public function listByCategory($categoryId)
    {
        $posts = Post::with('category')->where('category_id', $categoryId)->get();

        $posts = $posts->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                'category_name' => $post->category ? $post->category->name : null,
            ];
        });

        return response()->json($posts);
    }

    public function listAllPosts()
    {
        // Obtén todos los posts con la categoría asociada
        $posts = Post::with('category')->get();

        // Mapea los posts para incluir el nombre de la categoría
        $posts = $posts->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                'category_name' => $post->category ? $post->category->name : null,
            ];
        });

        // Devuelve los posts como JSON
        return response()->json($posts);
    }

    public function countPosts()
    {
        $count = Post::count();

        return response()->json(['post_count' => $count]);
    }
}
