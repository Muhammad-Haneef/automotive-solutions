<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreShipperRequest;
use App\Http\Requests\Admin\UpdateShipperRequest;
use App\Models\Admin\Shipper;
use Illuminate\Support\Facades\DB;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/shippers/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'shipper',  // route singular name
        'rpn' => 'shippers',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = Shipper::latest()->withTrashed()->get();
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
    public function store(StoreShipperRequest $request)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('shippers', 'public');
        }

        // Save only fillable fields in the database
        Shipper::create(array_intersect_key($data, array_flip((new Shipper())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipper $shipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipper $shipper, $id)
    {
        if (!$this->data['row'] = Shipper::find($id)) {
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
    public function update(UpdateShipperRequest $request, Shipper $shipper, $id)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('shippers', 'public');
            deleteImage($request->old_logo);
        } else {
            $data['logo'] = $request->old_logo;
        }

        // Save only fillable fields in the database
        Shipper::where('id', $id)->update(array_intersect_key($data, array_flip((new Shipper())->getFillable())));

        return back()->with([
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
            Shipper::findOrFail($id)->delete();
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
            Shipper::withTrashed()->findOrFail($id)->restore();
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
            Shipper::withTrashed()->findOrFail($id)->forceDelete();
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
