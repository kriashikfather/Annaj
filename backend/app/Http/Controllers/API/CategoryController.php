<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with('products')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request) {
       $data = $request->validate(['name' => 'required|string']);
        return Category::create($data);
    }

    public function show(Category $category) {
        return $category->load('products');
    }

     // category update करना
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name'        => 'required|string|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $category->update($data);
        return $category;
    }

    // category delete करना
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
