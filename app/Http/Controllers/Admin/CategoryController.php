<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Category;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/categories/";
    private $data= [
        'rows' => [],
        'row' => [],
        'rsn' => 'category', // route singular name
        'rpn' => 'categories', // route plural name
    ];
    public function index()
    {       
        $this->data['rows'] = $this->getCatsWithParentHierarchy(Category::withTrashed()->get());
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['categories'] = $this->getCatsBreadcrumbOptions(Category::all()->toArray());
        return view($this->root . 'form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all(); // Get validated data
        // Store the file and update the data array
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('categories', 'public');
        } else {
            $data['thumbnail'] = $request->old_thumbnail;
        }
        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('categories', 'public');
        } else {
            $data['banner'] = $request->old_banner;
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('categories', 'public');
        } else {
            $data['icon'] = $request->old_icon;
        }

        // Save only fillable fields in the database
        Category::create(array_intersect_key($data, array_flip((new Category())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        if (!$this->data['row'] = Category::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['categories'] = $this->getCatsBreadcrumbOptions(Category::all());
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category, $id)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('categories', 'public');
        } else {
            $data['thumbnail'] = $request->old_thumbnail;
        }
        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('categories', 'public');
        } else {
            $data['banner'] = $request->old_banner;
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('categories', 'public');
        } else {
            $data['icon'] = $request->old_icon;
        }
        // Save only fillable fields in the database
        Category::where('id', $id)->update($request->only((new Category())->getFillable()));

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
            Category::findOrFail($id)->delete();
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
            Category::withTrashed()->findOrFail($id)->restore();
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
            Category::withTrashed()->findOrFail($id)->forceDelete();
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

    function getCatsBreadcrumbOptions($categories)
    {
        $categoryMap = [];
    
        // Step 1: Store categories in an array for quick lookup
        foreach ($categories as $cat) {
            $categoryMap[$cat['id']] = [
                'id' => $cat['id'],
                'title' => $cat['title'],
                'parent_id' => $cat['parent_id'],
                'fullLabel' => $cat['title'],
            ];
        }
    
        // Step 2: Construct full label paths
        foreach ($categories as $cat) {
            if ($cat['parent_id'] != 0 && isset($categoryMap[$cat['parent_id']])) {
                $parent = $categoryMap[$cat['parent_id']];
                $categoryMap[$cat['id']]['fullLabel'] = $parent['fullLabel'] . ' > ' . $cat['title'];
            }
        }
    
        // Step 3: Convert to final select options with formatted label
        $options = array_map(function ($cat) {
            $parts = explode(' > ', $cat['fullLabel']);
            $lastPart = array_pop($parts); // Get the last category title
            $grayPart = count($parts) ? '<span style="color:gray">' . implode(' > ', $parts) . '</span> > ' : '';
    
            return (object) [
                'id' => (string) $cat['id'],
                'title' => $grayPart . '<strong>' . $lastPart . '</strong>',
            ];
        }, array_values($categoryMap));
    
        // Step 4: Add "Root Category" at the top
        array_unshift($options, (object) ['id' => '0', 'title' => 'Root Category']);
    
        return $options;
    }

    function getCatsWithParentHierarchy($categories)
{
    $categoryMap = [];

    // Step 1: Store categories in an associative array for quick lookup
    foreach ($categories as $cat) {
        $categoryMap[$cat['id']] = [
            'id' => $cat['id'],
            'thumbnail' => $cat['thumbnail'],
            'title' => $cat['title'],
            'parent_id' => $cat['parent_id'],
            'parents' => 'Self', // Default to "Self"
            'sort_by' => $cat['sort_by'], 
            'is_active' => $cat['is_active'], 
            'deleted_at' => $cat['deleted_at'], 
        ];
    }

    // Step 2: Construct the parents hierarchy for each category
    foreach ($categories as $cat) {
        $parentNames = [];
        $currentParentId = $cat['parent_id'];

        while ($currentParentId !== 0) {
            if (!isset($categoryMap[$currentParentId])) {
                break; // If parent is missing, stop
            }

            $parent = $categoryMap[$currentParentId];
            array_unshift($parentNames, $parent['title']); // Add parent title at the beginning
            $currentParentId = $parent['parent_id']; // Move to the next parent
        }

        // If there are parent names, join them with " > ", otherwise keep "Self"
        $categoryMap[$cat['id']]['parents'] = !empty($parentNames) ? implode(" > ", $parentNames) : "Self";
    }

    return array_values($categoryMap); // Return as a simple array
}

    



}
