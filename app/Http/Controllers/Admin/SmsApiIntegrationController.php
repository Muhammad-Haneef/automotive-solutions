<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSmsApiIntegrationRequest;
use App\Http\Requests\Admin\UpdateSmsApiIntegrationRequest;
use App\Models\Admin\SmsApiIntegration;
use App\Models\Admin\SmsGateway;
use Illuminate\Support\Facades\DB;

class SmsApiIntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/sms/api-integration/';

    /*
     * private $data = [
     *     'rows' => [],
     *     'row' => [],
     *     'rsn' => 'sms-api-integration', // route singular name
     *     'rpn' => 'sms-api-integrations', // route plural name
     *     'gateways' => SmsGateway::all(), // route plural name
     * ];
     */
    private $data;

    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'rsn' => 'sms-api-integration',  // route singular name
            'rpn' => 'sms-api-integrations',  // route plural name
            'gateways' => SmsGateway::all(),  // Fetch gateways properly
        ];
    }

    public function index()
    {
        $this->data['rows'] = SmsApiIntegration::select('id', 'sms_gateway_id', 'api_user_name', 'mask', 'is_default_gateway', 'sort_by', 'is_active', 'deleted_at')->latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSmsApiIntegrationRequest $request)
    {
        /*
         * tap(new SmsApiIntegration(), function ($model) use ($request) {
         *     $model->fill($request->only($model->getFillable()))->save();
         * });
         */
        SmsApiIntegration::create($request->only((new SmsApiIntegration())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SmsApiIntegration $smsApiIntegration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SmsApiIntegration $smsApiIntegration, $id)
    {
        if (!$this->data['row'] = SmsApiIntegration::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSmsApiIntegrationRequest $request, SmsApiIntegration $smsApiIntegration, $id)
    {
        SmsApiIntegration::where('id', $id)->update($request->only((new SmsApiIntegration())->getFillable()));
        if ($request->is_default_gateway) {
            SmsApiIntegration::where('id', '!=', $id)->update(['is_default_gateway' => 0]);
        }
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
            SmsApiIntegration::findOrFail($id)->delete();
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
            SmsApiIntegration::withTrashed()->findOrFail($id)->restore();
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
            SmsApiIntegration::withTrashed()->findOrFail($id)->forceDelete();
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
