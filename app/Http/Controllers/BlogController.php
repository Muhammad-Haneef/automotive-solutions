<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($category_slug = null)
    {
        $rows = Blog::where('is_active', 1)->when($category_slug, function ($query) use ($category_slug) {
            $category = BlogCategory::where('slug', $category_slug)->first();
            if ($category) {
                $query->where('blog_category_id', $category->id);
            }
        })->with(['category'])->get();
        

        // collect all tag IDs across every blog in one go
        $allTagIds = $rows->pluck('tags')
            ->filter()
            ->flatMap(fn($ids) => explode(',', $ids))
            ->unique()
            ->values();

        $tagModels = Tag::whereIn('id', $allTagIds)->get()->keyBy('id');

        $rows = $rows->map(function ($blog) use ($tagModels) {
            $ids = $blog->tags ? array_filter(explode(',', $blog->tags)) : [];
            $blog->tag_list = collect($ids)->map(fn($id) => $tagModels[$id] ?? null)->filter()->values();
            return $blog;
        });


        return view('blogs/list', compact('rows'));
    }


    public function show($slug = '')
    {
        $related_blogs = [];
        $record = Blog::where('slug', $slug)->with(['category'])->first();

        if (!$record) {
            return redirect()->route('blogs.index');
        }else{
            $related_blogs = Blog::where('is_active', 1)
                ->where('id', '!=', $record->id)
                ->where('blog_category_id', $record->blog_category_id)
                ->take(3)
                ->get();
        }

        $record->tag_list = collect($record->tags ? array_filter(explode(',', $record->tags)) : [])
            ->map(fn($id) => Tag::find($id))
            ->filter()
            ->values();
        return view('blogs/show', compact('record', 'related_blogs'));
    }
}
