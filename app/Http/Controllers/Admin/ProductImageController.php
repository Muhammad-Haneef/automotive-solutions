<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\ProductImage;
use App\Http\Requests\Admin\StoreProductImageRequest;
use App\Http\Requests\Admin\UpdateProductImageRequest;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/product-images/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'product-image', // route singular name
        'rpn' => 'product-images', // route plural name
    ];
    public function index($id)
    {
        $this->data['rows'] = ProductImage::where('product_id', $id)->latest()->withTrashed()->get();
        $this->data['active'] = 'gallery';
        $this->data['pid'] = $id;

        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductImageRequest $request, $pid)
    {

        $request->validate([
            'files' => 'required|array|min:1', // Ensure 'files' is an array & has at least one file
            'files.*' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validate each file
        ]);
        foreach ($request->file('files') as $file) {
            ProductImage::create([
                'product_id' => $pid,
                'link' => '#',
                'title' => 'Product Gallery',
                'image' => $file->store($this->data['rpn'], 'public'),
            ]);
        }
        //ProductImage::create($request->only((new ProductImage())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductImage $productImage, $id)
    {
        if (!$this->data['row'] = ProductImage::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage, $id)
    {
        ProductImage::where('id', $id)->update($request->only((new ProductImage())->getFillable()));
        return redirect()->route($this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }
    public function updateImageTitle()
    {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        // Find image by ID and update title
        $image = ProductImage::findOrFail($id);
        $image->title = $title;
        $image->save();

        // Return JSON response
        return response()->json([
            'success' => true,
            'message' => 'Title updated successfully!',
            'data' => $image
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            ProductImage::findOrFail($id)->delete();
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
            ProductImage::withTrashed()->findOrFail($id)->restore();
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
    public function destroy($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductImage::withTrashed()->findOrFail($id)->forceDelete();
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
