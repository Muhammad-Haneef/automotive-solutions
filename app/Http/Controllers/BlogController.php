<?php

namespace App\Http\Controllers;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::with('category')->get();
        return view('blogs/list', compact('data'));
    }
    public function show($slug='')
    {
        $data = Blog::where('slug', $slug)->first();
        return view('blogs/show', compact('data'));
    }
}
    