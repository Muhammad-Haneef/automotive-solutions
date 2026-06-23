<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Blog;
use App\Models\Admin\BlogCategory;
use App\Models\Admin\Tag;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/blogs/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'categories' => [],
            'tags' => [],
            'rsn' => 'blog', // route singular name
            'rpn' => 'blogs', // route plural name
        ];
    }

    public function index()
    {
        $this->data['categories'] = BlogCategory::select('id', 'title')->where('is_active', 1)->get();
        $this->data['tags'] = Tag::select('id', 'title')->where('is_active', 1)->get();
        $this->data['rows'] = Blog::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        } else {
            $data['image'] = $request->old_image;
        }
        if (count($request->tags) > 0) {
            $data['tags'] = implode(',', $request->tags);
        }

        // Save only fillable fields in the database
        Blog::create(array_intersect_key($data, array_flip((new Blog())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, $id)
    {
        if (!$this->data['row'] = Blog::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['categories'] = BlogCategory::select('id', 'title')->where('is_active', 1)->get();
        $this->data['tags'] = Tag::select('id', 'title')->where('is_active', 1)->get();
        $this->data['rows'] = Blog::latest()->withTrashed()->get();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog, $id)
    {

        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        } else {
            $data['image'] = $request->old_image;
        }
        if (count($request->tags) > 0) {
            $data['tags'] = implode(',', $request->tags);
        }

        // Save only fillable fields in the database
        Blog::where('id', $id)->update($request->only((new Blog())->getFillable()));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            Blog::findOrFail($id)->delete();
            DB::commit();
            return back()->with([
                'message' => 'Record has been deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'An error occurred while deleting the record.',
                'alert-type' => 'error'
            ]);
        }
    }
    public function restore($id)
    {
        DB::beginTransaction();
        try {
            Blog::withTrashed()->findOrFail($id)->restore();
            DB::commit();
            return back()->with([
                'message' => 'Record has been restored successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to restore record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Blog::withTrashed()->findOrFail($id)->forceDelete();
            DB::commit();
            return back()->with([
                'message' => 'Record deleted successfully.',
                'alert-type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with([
                'message' => 'Unable to delete record: ' . $e->getMessage(),
                'alert-type' => 'error'
            ]);
        }
    }
}
