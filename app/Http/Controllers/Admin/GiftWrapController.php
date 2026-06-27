<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGiftWrapRequest;
use App\Http\Requests\Admin\UpdateGiftWrapRequest;
use App\Models\Admin\GiftWrap;
use Illuminate\Support\Facades\DB;

class GiftWrapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/orders/gift-wraps/';

    private $data;

    public function __construct()
    {
        $this->data = [
            'rows' => 0,
            'row' => 0,
            'rsn' => 'gift-wrap',  // route singular name
            'rpn' => 'gift-wraps',  // route plural name
        ];
    }

    public function index()
    {
        $this->data['rows'] = GiftWrap::latest()->withTrashed()->get();
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
    public function store(StoreGiftWrapRequest $request)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
        }

        // Save only fillable fields in the database
        GiftWrap::create(array_intersect_key($data, array_flip((new GiftWrap())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(GiftWrap $giftWrap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GiftWrap $giftWrap, $id)
    {
        if (!$this->data['row'] = GiftWrap::find($id)) {
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
    public function update(UpdateGiftWrapRequest $request, GiftWrap $giftWrap, $id)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
            deleteImage($request->old_image);
        } else {
            $data['image'] = $data['old_image'];
        }

        // Save only fillable fields in the database
        GiftWrap::where('id', $id)->update(array_intersect_key($data, array_flip((new GiftWrap())->getFillable())));

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
            GiftWrap::findOrFail($id)->delete();
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
            GiftWrap::withTrashed()->findOrFail($id)->restore();
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
            GiftWrap::withTrashed()->findOrFail($id)->forceDelete();
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
