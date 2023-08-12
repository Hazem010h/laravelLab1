<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            "message" => "All Categories",
            "status_code" => 200,
            "data" => CategoryResource::collection($categories)
        ]);
    }

    public function store(Request $request)
    {
        $category = Category::create([
            "name" => $request->name
        ]);
        return response()->json([
            "message" => "Category Created",
            "status_code" => 201,
            "data" => $category
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json([
            "message" => "Category Found",
            "status_code" => 200,
            "data" => new CategoryResource($category)
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name
        ]);
        return response()->json([
            "message" => "Category Updated",
            "status_code" => 200,
            "data" => $category
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json([
            "message" => "Category Deleted",
            "status_code" => 200,
            "data" => []
        ]);
    }
}
