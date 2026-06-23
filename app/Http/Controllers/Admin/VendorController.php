<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Vendor;
use App\Models\Admin\User;
use App\Models\Admin\PaymentMethod;
use App\Http\Requests\Admin\StoreVendorRequest;
use App\Http\Requests\Admin\UpdateVendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/vendors/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'vendor', // route singular name
        'rpn' => 'vendors', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = Vendor::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['users'] = User::all();
        $this->data['payment_methods'] = PaymentMethod::all();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store($this->data['rpn'], 'public');
        }

        // Save only fillable fields in the database
        Vendor::create(array_intersect_key($data, array_flip((new Vendor())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor, $id)
    {
        if (!$this->data['row'] = Vendor::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['users'] = User::all();
        $this->data['payment_methods'] = PaymentMethod::all();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor, $id)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store($this->data['rpn'], 'public');
        } else {
            $data['logo'] = $request->old_logo;
        }

        // Save only fillable fields in the database
        Vendor::where('id', $id)->update(array_intersect_key($data, array_flip((new Vendor())->getFillable())));

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
            Vendor::findOrFail($id)->delete();
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
            Vendor::withTrashed()->findOrFail($id)->restore();
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
            Vendor::withTrashed()->findOrFail($id)->forceDelete();
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
