<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\DefaultSms;
use App\Models\Admin\SmsCategory;
use App\Http\Requests\Admin\StoreDefaultSmsRequest;
use App\Http\Requests\Admin\UpdateDefaultSmsRequest;

class DefaultSmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/default-sms/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'rsn' => 'default-sms', // route singular name
            'rpn' => 'default-sms', // route plural name
            'categories' => [], // Fetch gateways properly
        ];
    }

    public function index()
    {
        $this->data['categories'] = SmsCategory::all();
        $this->data['rows'] = DefaultSms::withTrashed()->get();
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
    public function store(StoreDefaultSmsRequest $request)
    {
        DefaultSms::create($request->only((new DefaultSms())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DefaultSms $defaultSms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DefaultSms $defaultSms, $id)
    {
        if (!$this->data['row'] = DefaultSms::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['categories'] = SmsCategory::all();
        $this->data['rows'] = DefaultSms::withTrashed()->get();
        return view($this->root.'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDefaultSmsRequest $request, DefaultSms $defaultSms, $id)
    {
        DefaultSms::where('id', $id)->update($request->only((new DefaultSms())->getFillable()));
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
            DefaultSms::findOrFail($id)->delete();
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
            DefaultSms::withTrashed()->findOrFail($id)->restore();
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
            DefaultSms::withTrashed()->findOrFail($id)->forceDelete();
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
