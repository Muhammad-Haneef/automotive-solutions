<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\BannerImage;
use App\Http\Requests\Admin\StoreBannerImageRequest;
use App\Http\Requests\Admin\UpdateBannerImageRequest;

class BannerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/";
    private $data = [
        'rows' => [],
        'row' => [],
        'rsn' => '', // route singular name
        'rpn' => '', // route plural name
    ];
    public function index()
    {
        $this->data['rows'] = BannerImage::latest()->withTrashed()->get();
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
    public function store(StoreBannerImageRequest $request)
    {
        BannerImage::create($request->only((new BannerImage())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerImage $bannerImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerImage $bannerImage, $id)
    {
        if (!$this->data['row'] = BannerImage::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerImageRequest $request, BannerImage $bannerImage, $id)
    {
        BannerImage::where('id', $id)->update($request->only((new BannerImage())->getFillable()));
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
            BannerImage::findOrFail($id)->delete();
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
            BannerImage::withTrashed()->findOrFail($id)->restore();
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
            BannerImage::withTrashed()->findOrFail($id)->forceDelete();
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
