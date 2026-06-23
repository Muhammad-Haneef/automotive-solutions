<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\CallBackRequest;
use App\Models\Admin\SystemUser;
use App\Http\Requests\Admin\StoreCallBackRequestRequest;
use App\Http\Requests\Admin\UpdateCallBackRequestRequest;

class CallBackRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/callback-requests/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'systemUsers' => [],
            'rsn' => 'callback-request', // route singular name
            'rpn' => 'callback-requests', // route plural name
        ];
    }

    public function index()
    {
        $this->data['systemUsers'] = SystemUser::all();
        $this->data['rows'] = CallBackRequest::withTrashed()->get();
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
    public function store(StoreCallBackRequestRequest $request)
    {
        CallBackRequest::create($request->only((new CallBackRequest())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CallBackRequest $callBackRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallBackRequest $callBackRequest, $id)
    {
        if (!$this->data['row'] = CallBackRequest::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['systemUsers'] = SystemUser::all();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCallBackRequestRequest $request, CallBackRequest $callBackRequest, $id)
    {
        CallBackRequest::where('id', $id)->update($request->only((new CallBackRequest())->getFillable()));
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
            CallBackRequest::findOrFail($id)->delete();
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
            CallBackRequest::withTrashed()->findOrFail($id)->restore();
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
            CallBackRequest::withTrashed()->findOrFail($id)->forceDelete();
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
