<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\ProductVideo;
use App\Http\Requests\Admin\StoreProductVideoRequest;
use App\Http\Requests\Admin\UpdateProductVideoRequest;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/product-videos/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'product-video', // route singular name
        'rpn' => 'product-videos', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = ProductVideo::latest()->withTrashed()->get();
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
    public function store(StoreProductVideoRequest $request)
    {
        ProductVideo::create($request->only((new ProductVideo())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVideo $productVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVideo $productVideo, $pid, $id)
    {
        if (!$this->data['row'] = ProductVideo::find($id)) {
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
    public function update(UpdateProductVideoRequest $request, ProductVideo $productVideo, $pid, $id)
    {
        ProductVideo::where('id', $id)->update($request->only((new ProductVideo())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
        /*
        return redirect()->route($this->data['rpn'], [$pid])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVideo::findOrFail($id)->delete();
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
    public function restore( $pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVideo::withTrashed()->findOrFail($id)->restore();
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
    public function destroy( $pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVideo::withTrashed()->findOrFail($id)->forceDelete();
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
