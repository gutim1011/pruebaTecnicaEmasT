<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use App\Models\Category;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CategoryApiController extends Controller

{

    public function index(): JsonResponse

    {

        $categories = Category::all();

        return response()->json($categories, 200);

    }


    public function show(string $id): JsonResponse

    {

        $category = Category::findOrFail($id);

        return response()->json($category, 200);

    }      
    
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:categories,name|max:255',
            'description' => 'string'
        ]);

        $category = Category::create($validated);
        return response()->json($category, 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $category = Category::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id
        ]);

        $category->update($validated);
        return response()->json($category, 200);
    }

    public function destroy(string $id): JsonResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }

}