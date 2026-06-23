<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\ReferralSetting;
use App\Http\Requests\Admin\StoreReferralSettingRequest;
use App\Http\Requests\Admin\UpdateReferralSettingRequest;

class ReferralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/referrals/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'rsn' => 'referral-setting', // route singular name
            'rpn' => 'referral-setting', // route plural name
        ];
    }
    public function index()
    {
        return view($this->root . 'setting', $this->data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'setting', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReferralSettingRequest $request)
    {
        ReferralSetting::create($request->only((new ReferralSetting())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferralSetting $referralSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferralSetting $referralSetting, $id)
    {
        if (!$this->data['row'] = ReferralSetting::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'setting', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferralSettingRequest $request, ReferralSetting $referralSetting, $id)
    {
        ReferralSetting::where('id', $id)->update($request->only((new ReferralSetting())->getFillable()));
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
            ReferralSetting::findOrFail($id)->delete();
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
            ReferralSetting::withTrashed()->findOrFail($id)->restore();
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
            ReferralSetting::withTrashed()->findOrFail($id)->forceDelete();
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
