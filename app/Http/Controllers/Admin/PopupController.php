<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePopupRequest;
use App\Http\Requests\Admin\UpdatePopupRequest;
use App\Models\Admin\Popup;
use Illuminate\Support\Facades\DB;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/popups/';

    private $data;

    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'pages' => [],  // Call method to fetch pages
            'rsn' => 'popup',  // Route singular name
            'rpn' => 'popups',  // Route plural name
        ];
    }

    public function index()
    {
        $this->data['pages'] = getPagesList();  // Call method to fetch pages
        $this->data['rows'] = Popup::latest()->withTrashed()->get();
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
    public function store(StorePopupRequest $request)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
        }
        if ($data['display_pages']) {
            $data['display_pages'] = implode(',', $data['display_pages']);
        }

        // Save only fillable fields in the database
        Popup::create(array_intersect_key($data, array_flip((new Popup())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Popup $popup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Popup $popup, $id)
    {
        if (!$this->data['row'] = Popup::find($id)) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }

        // echo "<pre>"; print_r($this->data['row']); exit();
        $this->data['pages'] = getPagesList();  // Call method to fetch pages
        $this->data['rows'] = Popup::latest()->withTrashed()->get();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePopupRequest $request, Popup $popup, $id)
    {
        $data = $request->all();  // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
            deleteImage($request->old_image);
        } else {
            $data['image'] = $request->old_image;
        }
        if ($data['display_pages']) {
            $data['display_pages'] = implode(',', $data['display_pages']);
        }
        // Save only fillable fields in the database
        Popup::where('id', $id)->update(array_intersect_key($data, array_flip((new Popup())->getFillable())));

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
            Popup::findOrFail($id)->delete();
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
            Popup::withTrashed()->findOrFail($id)->restore();
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
            Popup::withTrashed()->findOrFail($id)->forceDelete();
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
