<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\CourierServiceIntegration;
use App\Models\Admin\CourierService;
use App\Http\Requests\Admin\StoreCourierServiceIntegrationRequest;
use App\Http\Requests\Admin\UpdateCourierServiceIntegrationRequest;

class CourierServiceIntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/courier-services-integrations/";
    
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' =>  [],
            'row' => [],
            'courierServices' => [],
            'rsn' => 'courier-services-integration', // route singular name
            'rpn' => 'courier-services-integrations', // route plural name
        ];
    }

    public function index()
    {
        $this->data['courierServices'] = CourierService::all();
        $this->data['rows'] = CourierServiceIntegration::withTrashed()->get();
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
    public function store(StoreCourierServiceIntegrationRequest $request)
    {
        CourierServiceIntegration::create($request->only((new CourierServiceIntegration())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CourierServiceIntegration $courierServiceIntegration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourierServiceIntegration $courierServiceIntegration, $id)
    {
        if (!$this->data['row'] = CourierServiceIntegration::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['courierServices'] = CourierService::all();
        $this->data['rows'] = CourierServiceIntegration::withTrashed()->get();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourierServiceIntegrationRequest $request, CourierServiceIntegration $courierServiceIntegration, $id)
    {
        CourierServiceIntegration::where('id', $id)->update($request->only((new CourierServiceIntegration())->getFillable()));
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
            CourierServiceIntegration::findOrFail($id)->delete();
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
            CourierServiceIntegration::withTrashed()->findOrFail($id)->restore();
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
            CourierServiceIntegration::withTrashed()->findOrFail($id)->forceDelete();
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
