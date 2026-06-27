<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductFaqRequest;
use App\Http\Requests\Admin\UpdateProductFaqRequest;
use App\Models\Admin\ProductFaq;
use Illuminate\Support\Facades\DB;
use Laravel\Pail\ValueObjects\Origin\Console;

class ProductFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/product-faqs/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'product-faq',  // route singular name
        'active' => 'product-faqs',  // route plural name
        'rpn' => 'product-faqs',  // route plural name
    ];

    public function index($pid)
    {
        $this->data['rows'] = ProductFaq::where('product_id', $pid)->latest()->withTrashed()->get();
        $this->data['pid'] = $pid;
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
    public function store(StoreProductFaqRequest $request)
    {
        ProductFaq::create($request->only((new ProductFaq())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductFaq $productFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductFaq $productFaq, $pid, $id)
    {
        if (!$this->data['row'] = ProductFaq::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['pid'] = $pid;
        $this->data['rows'] = ProductFaq::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductFaqRequest $request, ProductFaq $productFaq, $pid, $id)
    {
        ProductFaq::where('id', $id)->update($request->only((new ProductFaq())->getFillable()));
        return redirect()->route('admin.' . $this->data['rpn'], [$pid])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductFaq::findOrFail($id)->delete();
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

    public function restore($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductFaq::withTrashed()->findOrFail($id)->restore();
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
            $result = ProductFaq::withTrashed()->findOrFail($id)->forceDelete();
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
