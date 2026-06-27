<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSystemUserRolePrivilegeRequest;
use App\Http\Requests\Admin\UpdateSystemUserRolePrivilegeRequest;
use App\Models\Admin\SystemUserRolePrivilege;
use Illuminate\Support\Facades\DB;

class SystemUserRolePrivilegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/system-user-role-privileges/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'system-user-role-privilege',  // route singular name
        'rpn' => 'system-user-role-privileges',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = SystemUserRolePrivilege::latest()->withTrashed()->get();
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
    public function store(StoreSystemUserRolePrivilegeRequest $request)
    {
        SystemUserRolePrivilege::create($request->only((new SystemUserRolePrivilege())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SystemUserRolePrivilege $systemUserRolePrivilege)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SystemUserRolePrivilege $systemUserRolePrivilege, $id)
    {
        if (!$this->data['row'] = SystemUserRolePrivilege::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = SystemUserRolePrivilege::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemUserRolePrivilegeRequest $request, SystemUserRolePrivilege $systemUserRolePrivilege, $id)
    {
        SystemUserRolePrivilege::where('id', $id)->update($request->only((new SystemUserRolePrivilege())->getFillable()));
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
            SystemUserRolePrivilege::findOrFail($id)->delete();
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
            SystemUserRolePrivilege::withTrashed()->findOrFail($id)->restore();
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
            SystemUserRolePrivilege::withTrashed()->findOrFail($id)->forceDelete();
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
