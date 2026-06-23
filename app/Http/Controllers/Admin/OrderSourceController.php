<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\OrderSource;
use App\Http\Requests\Admin\StoreOrderSourceRequest;
use App\Http\Requests\Admin\UpdateOrderSourceRequest;

class OrderSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/listing-titles/";
    private $data = [
        'rows'=>[],
        'row'=>[],
        'rsn'=>'order-source', // route singular name
        'rpn'=>'order-sources', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = OrderSource::withTrashed()->get();
        return view($this->root.'list', $this->data);
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
    public function store(StoreOrderSourceRequest $request)
    {
        OrderSource::create($request->only((new OrderSource())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderSource $orderSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderSource $orderSource, $id)
    {
        if (!$this->data['row'] = OrderSource::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = OrderSource::withTrashed()->get();
        return view($this->root.'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderSourceRequest $request, OrderSource $orderSource, $id)
    {
        OrderSource::where('id', $id)->update($request->only((new OrderSource())->getFillable()));
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
            OrderSource::findOrFail($id)->delete();
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
            OrderSource::withTrashed()->findOrFail($id)->restore();
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
            OrderSource::withTrashed()->findOrFail($id)->forceDelete();
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
