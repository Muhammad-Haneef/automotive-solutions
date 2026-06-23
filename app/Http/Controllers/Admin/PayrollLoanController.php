<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\PayrollLoan;
use App\Http\Requests\Admin\StorePayrollLoanRequest;
use App\Http\Requests\Admin\UpdatePayrollLoanRequest;

class PayrollLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/payroll-loans/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'payroll-loan', // route singular name
        'rpn' => 'payroll-loans', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = PayrollLoan::withTrashed()->get();
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
    public function store(StorePayrollLoanRequest $request)
    {
        PayrollLoan::create($request->only((new PayrollLoan())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PayrollLoan $payrollLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PayrollLoan $payrollLoan, $id)
    {
        if (!$this->data['row'] = PayrollLoan::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = PayrollLoan::withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayrollLoanRequest $request, PayrollLoan $payrollLoan, $id)
    {
        PayrollLoan::where('id', $id)->update($request->only((new PayrollLoan())->getFillable()));
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
            PayrollLoan::findOrFail($id)->delete();
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
            PayrollLoan::withTrashed()->findOrFail($id)->restore();
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
            PayrollLoan::withTrashed()->findOrFail($id)->forceDelete();
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
