<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $validated['name'];
        $category->save();

        return response()->json(['message' => 'Category created successfully', 'category' => $category]);
    }

    public function index()
    {
        // Obtén todas las categorías desde la base de datos
        $categories = Category::all();

        // Retorna las categorías, puedes devolverlas a una vista o como respuesta JSON
        return response()->json($categories);
        // Si prefieres usar una vista, puedes hacer algo como:
        // return view('categories.index', compact('categories'));
    }
}
