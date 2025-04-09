<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use App\Models\Product;

use Illuminate\Http\JsonResponse;


class ProductApiController extends Controller

{

    public function index(): JsonResponse

    {

        $products = Product::all();

        return response()->json($products, 200);

    }


    public function show(string $id): JsonResponse

    {

    $product = Product::findOrFail($id);

    return response()->json($product, 200);

    }      
    
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'stock' => 'required|numeric|gt:0',
                    'price' => 'required|numeric|gt:0',
                    'category' => 'required'
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $product = Product::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required',
                    'description' => 'required',
                    'stock' => 'required|numeric|gt:0',
                    'price' => 'required|numeric|gt:0',
                    'category' => 'required'
        ]);

        $product->update($validated);
        return response()->json($product, 200);
    }

    public function destroy(string $id): JsonResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }

}