<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Product; 

use App\Models\Admin\ProductVideoSection;
use App\Http\Requests\Admin\StoreProductVideoSectionRequest;
use App\Http\Requests\Admin\UpdateProductVideoSectionRequest;

class ProductVideoSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/product-video-sections/";
    private $data ;
    function __construct()
    {
        $this->data = [
            'rows' => 0,
            'row' => 0,
            'active' => 'product-videos',
            'rsn' => 'product-video-section', // route singular name
            'rpn' => 'product-video-sections', // route plural name
        ];
        
    }

    public function index($pid)
    {
        $this->data['pid'] = $pid;
        $this->data['rows'] = ProductVideoSection::where('product_id', $pid)->latest()->withTrashed()->with('videos')->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'list', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductVideoSectionRequest $request)
    {
        ProductVideoSection::create($request->only((new ProductVideoSection())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVideoSection $productVideoSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVideoSection $productVideoSection, $id)
    {
        if (!$this->data['row'] = ProductVideoSection::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        //$this->data['row'] = ProductVideoSection::find($id);
        $this->data['rows'] = ProductVideoSection::withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVideoSectionRequest $request, ProductVideoSection $productVideoSection, $id)
    {
        ProductVideoSection::where('id', $id)->update($request->only('title', 'description', 'sort_by', 'is_active'));
        $alert = array(
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        );
        return redirect()->route($this->data['rpn'])->with($alert);



        ProductVideoSection::where('id', $id)->update($request->only((new ProductVideoSection())->getFillable()));
        return redirect()->route($this->data['rpn'])->with([
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
            ProductVideoSection::findOrFail($id)->delete();
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
            ProductVideoSection::withTrashed()->findOrFail($id)->restore();
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
            ProductVideoSection::withTrashed()->findOrFail($id)->forceDelete();
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
