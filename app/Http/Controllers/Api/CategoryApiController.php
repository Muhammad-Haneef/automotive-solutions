<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Category;

class CategoryApiController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)
            ->with('children')
            ->get();

        return response()->json([
            'status' => 200,
            'data' => $categories,
            'message' => 'records received',
        ]);
    }
}
