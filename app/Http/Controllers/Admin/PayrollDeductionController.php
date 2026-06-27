<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePayrollDeductionRequest;
use App\Http\Requests\Admin\UpdatePayrollDeductionRequest;
use App\Models\Admin\PayrollDeduction;
use Illuminate\Support\Facades\DB;

class PayrollDeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/listing-titles/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'blog-category',  // route singular name
        'rpn' => 'blog-categories',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = PayrollDeduction::latest()->withTrashed()->get();
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
    public function store(StorePayrollDeductionRequest $request)
    {
        PayrollDeduction::create($request->only((new PayrollDeduction())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PayrollDeduction $payrollDeduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayrollDeduction $payrollDeduction, $id)
    {
        if (!$this->data['row'] = PayrollDeduction::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = PayrollDeduction::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayrollDeductionRequest $request, PayrollDeduction $payrollDeduction, $id)
    {
        PayrollDeduction::where('id', $id)->update($request->only((new PayrollDeduction())->getFillable()));
        return redirect()->route('admin.' . $this->data['rpn'])->with([
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
            PayrollDeduction::findOrFail($id)->delete();
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
            PayrollDeduction::withTrashed()->findOrFail($id)->restore();
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
            PayrollDeduction::withTrashed()->findOrFail($id)->forceDelete();
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
