<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return response()->json([
            "message" => "All Tags",
            "status_code" => 200,
            "data" => TagResource::collection($tags)
        ]);
    }

    public function store(Request $request)
    {
        $tag = Tag::create([
            "name" => $request->name
        ]);
        return response()->json([
            "message" => "Tag Created",
            "status_code" => 201,
            "data" => $tag
        ]);
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return response()->json([
            "message" => "Tag Found",
            "status_code" => 200,
            "data" => new TagResource($tag)
        ]);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update([
            'name' => $request->name
        ]);
        return response()->json([
            "message" => "Tag Updated",
            "status_code" => 200,
            "data" => $tag
        ]);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return response()->json([
            "message" => "Tag Deleted",
            "status_code" => 200,
            "data" => []
        ]);
    }
}
