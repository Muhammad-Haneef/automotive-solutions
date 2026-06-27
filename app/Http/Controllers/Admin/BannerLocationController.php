<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerLocationRequest;
use App\Http\Requests\Admin\UpdateBannerLocationRequest;
use App\Models\Admin\BannerLocation;
use Illuminate\Support\Facades\DB;

class BannerLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/banner-locations/';

    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => 'banner-location',  // route singular name
        'rpn' => 'banner-locations',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = BannerLocation::latest()->withTrashed()->get();
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
    public function store(StoreBannerLocationRequest $request)
    {
        BannerLocation::create($request->only((new BannerLocation())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerLocation $bannerLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerLocation $bannerLocation, $id)
    {
        if (!$this->data['row'] = BannerLocation::find($id)) {
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
    public function update(UpdateBannerLocationRequest $request, BannerLocation $bannerLocation, $id)
    {
        BannerLocation::where('id', $id)->update($request->only((new BannerLocation())->getFillable()));
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
            BannerLocation::findOrFail($id)->delete();
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
            BannerLocation::withTrashed()->findOrFail($id)->restore();
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
            BannerLocation::withTrashed()->findOrFail($id)->forceDelete();
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
