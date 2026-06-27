<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSalaryStructureRequest;
use App\Http\Requests\Admin\UpdateSalaryStructureRequest;
use App\Models\Admin\SalaryStructure;
use Illuminate\Support\Facades\DB;

class SalaryStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/salary-structures/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'salary-structure',  // route singular name
        'rpn' => 'salary-structures',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = SalaryStructure::latest()->withTrashed()->get();
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
    public function store(StoreSalaryStructureRequest $request)
    {
        SalaryStructure::create($request->only((new SalaryStructure())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SalaryStructure $salaryStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalaryStructure $salaryStructure, $id)
    {
        if (!$this->data['row'] = SalaryStructure::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = SalaryStructure::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalaryStructureRequest $request, SalaryStructure $salaryStructure, $id)
    {
        SalaryStructure::where('id', $id)->update($request->only((new SalaryStructure())->getFillable()));
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
            SalaryStructure::findOrFail($id)->delete();
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
            SalaryStructure::withTrashed()->findOrFail($id)->restore();
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
            SalaryStructure::withTrashed()->findOrFail($id)->forceDelete();
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
