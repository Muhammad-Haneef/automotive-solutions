<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\AttributeValue;
use App\Models\Admin\Attribute;
use App\Http\Requests\Admin\StoreAttributeValueRequest;
use App\Http\Requests\Admin\UpdateAttributeValueRequest;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/attribute-values/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'attributes' => [],
            'rsn' => 'attribute-value', // route singular name
            'rpn' => 'attribute-values', // route plural name
        ];
    }
    public function index()
    {
        $this->data['attributes'] = Attribute::all();
        $this->data['rows'] = AttributeValue::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeValueRequest $request)
    {
        AttributeValue::create($request->only((new AttributeValue())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeValue $attributeValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeValue $attributeValue, $id)
    {
        if (!$this->data['row'] = AttributeValue::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['attributes'] = Attribute::all();
        $this->data['rows'] = AttributeValue::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeValueRequest $request, AttributeValue $attributeValue, $id)
    {
        AttributeValue::where('id', $id)->update($request->only((new AttributeValue())->getFillable()));
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
            AttributeValue::findOrFail($id)->delete();
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
            AttributeValue::withTrashed()->findOrFail($id)->restore();
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
            AttributeValue::withTrashed()->findOrFail($id)->forceDelete();
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
