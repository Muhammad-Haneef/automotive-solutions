<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\ProductVariation;
use App\Models\Admin\Attribute;
use App\Models\Admin\AttributeValue;

use App\Http\Requests\Admin\StoreProductVariationRequest;
use App\Http\Requests\Admin\UpdateProductVariationRequest;

class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/product-variations/";
    private $data;

    function __construct()
    {
        $this->data = [
            'rows' =>  0,
            'row' => 0,
            'active' => 'product-variations',

            //'attributes' => Attribute::with('attributeValues')->get(),
            'attributes' => [],
            'attributesValues' => [],

            'xvalues' => [],

            'rsn' => 'product-variation', // route singular name
            'rpn' => 'product-variations', // route plural name
        ];
    }

    public function index($pid)
    {
        $this->data['attributes'] = Attribute::whereHas('attributeValues')->with('attributeValues')->get();
        $this->data['attributesValues'] = AttributeValue::all();
        $this->data['rows'] = ProductVariation::where('product_id', $pid)->latest()->withTrashed()->get();
        $this->data['pid']= $pid;
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
    public function store(StoreProductVariationRequest $request)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
        }

        $data['sku']="ISKU-".$data['product_id'].$data['attribute_id'].$data['attribute_value_id'];

        ProductVariation::create(array_intersect_key($data, array_flip((new ProductVariation())->getFillable())));

        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariation $productVariation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVariation $productVariation, $pid, $id)
    {
        if (!$this->data['row'] = ProductVariation::find($id)) {
            return redirect()->route($this->data['rpn'], [$pid])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['attributes'] = Attribute::whereHas('attributeValues')->with('attributeValues')->get();
        $this->data['attributesValues'] = AttributeValue::all();
        $this->data['pid'] = $pid;
        $this->data['xvalues'] = AttributeValue::where('attribute_id', $this->data['row']->attribute_id)->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVariationRequest $request, ProductVariation $productVariation, $pid, $id)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
        }else{
            $data['image'] = $request->old_image;
        }

        // Save only fillable fields in the database
        ProductVariation::where('id', $id)->update(array_intersect_key($data, array_flip((new ProductVariation())->getFillable())));

        return redirect()->route($this->data['rpn'], [$pid])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVariation::findOrFail($id)->delete();
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
    public function restore($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVariation::withTrashed()->findOrFail($id)->restore();
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
    public function destroy($pid, $id)
    {
        DB::beginTransaction();
        try {
            ProductVariation::withTrashed()->findOrFail($id)->forceDelete();
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
