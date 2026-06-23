<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\OrderGiftWrap;
use App\Http\Requests\Admin\StoreOrderGiftWrapRequest;
use App\Http\Requests\Admin\UpdateOrderGiftWrapRequest;

class OrderGiftWrapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/orders/gift-wraps/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => 0,
            'row' => 0,
            'rsn' => 'gift-wrap', // route singular name
            'rpn' => 'gift-wraps', // route plural name
        ];
    }
    public function index()
    {
        $this->data['rows']=OrderGiftWrap::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderGiftWrapRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderGiftWrap $orderGiftWrap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderGiftWrap $orderGiftWrap, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderGiftWrapRequest $request, OrderGiftWrap $orderGiftWrap, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        DB::beginTransaction();
        try {
            OrderGiftWrap::findOrFail($id)->delete();
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
            OrderGiftWrap::withTrashed()->findOrFail($id)->restore();
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
            OrderGiftWrap::withTrashed()->findOrFail($id)->forceDelete();
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
