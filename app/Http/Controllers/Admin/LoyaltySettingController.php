<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\LoyaltySetting;
use App\Http\Requests\Admin\StoreLoyaltySettingRequest;
use App\Http\Requests\Admin\UpdateLoyaltySettingRequest;

class LoyaltySettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/loyalty-settings/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'rsn' => 'loyalty-setting', // route singular name
            'rpn' => 'loyalty-settings', // route plural name
        ];
    }
    public function index()
    {
        $this->data['rows'] = LoyaltySetting::latest()->withTrashed()->get();
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
    public function store(StoreLoyaltySettingRequest $request)
    {
        LoyaltySetting::create($request->only((new LoyaltySetting())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(LoyaltySetting $loyaltySetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoyaltySetting $loyaltySetting, $id)
    {
        if (!$this->data['row'] = LoyaltySetting::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['rows'] = LoyaltySetting::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoyaltySettingRequest $request, LoyaltySetting $loyaltySetting, $id)
    {
        LoyaltySetting::where('id', $id)->update($request->only((new LoyaltySetting())->getFillable()));
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
            LoyaltySetting::findOrFail($id)->delete();
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
            LoyaltySetting::withTrashed()->findOrFail($id)->restore();
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
            LoyaltySetting::withTrashed()->findOrFail($id)->forceDelete();
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
