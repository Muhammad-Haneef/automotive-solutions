<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\PrivilegeGroup;
use App\Http\Requests\Admin\StorePrivilegeGroupRequest;
use App\Http\Requests\Admin\UpdatePrivilegeGroupRequest;

class PrivilegeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/privilege-groups/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'privilege-group', // route singular name
        'rpn' => 'privilege-groups', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = PrivilegeGroup::latest()->withTrashed()->get();
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
    public function store(StorePrivilegeGroupRequest $request)
    {
        PrivilegeGroup::create($request->only((new PrivilegeGroup())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrivilegeGroup $privilegeGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrivilegeGroup $privilegeGroup, $id)
    {
        if (!$this->data['row'] = PrivilegeGroup::find($id)) {
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
    public function update(UpdatePrivilegeGroupRequest $request, PrivilegeGroup $privilegeGroup, $id)
    {
        PrivilegeGroup::where('id', $id)->update($request->only((new PrivilegeGroup())->getFillable()));
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
            PrivilegeGroup::findOrFail($id)->delete();
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
            PrivilegeGroup::withTrashed()->findOrFail($id)->restore();
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
            PrivilegeGroup::withTrashed()->findOrFail($id)->forceDelete();
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
