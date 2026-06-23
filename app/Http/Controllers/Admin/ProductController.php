<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use App\Models\Admin\Warehouse;
use App\Models\Admin\ShippingClass;
use App\Models\Admin\ProductImage;

use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use GuzzleHttp\Psr7\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/products/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'brands' => [],
            'warehouses' => [],
            'categories' => [],
            'shippingClasses' => [],

            'productTypes' => [],
            'stockStatuses' => [],
            'warrantyPeriodUnits' => [],
            'warrantyTypes' => [],
            'licenseTypes' => [],

            'rsn' => 'product', // route singular name
            'rpn' => 'products', // route plural name
        ];
    }



    public function index()
    {
        $this->data['brands'] = Brand::select('id', 'title')->where('is_active', 1)->get();
        $this->data['warehouses'] = Warehouse::select('id', 'title')->where('is_active', 1)->get();
        $this->data['categories'] = Category::select('id', 'title')->where('is_active', 1)->get();
        $this->data['shippingClasses'] = ShippingClass::select('id', 'title')->where('is_active', 1)->get();
        $this->data['productTypes'] = getProductTypes();
        $this->data['stockStatuses'] = getProductStockStatuses();
        $this->data['warrantyPeriodUnits'] = getWarrantyPeriodUnits();
        $this->data['warrantyTypes'] = getWarrantyTypes();
        $this->data['licenseTypes'] = getLicenseTypes();

        $this->data['rows'] = Product::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$this->data['brands'] = Brand::select('id', 'title')->where('is_active', 1)->get();
        //$this->data['warehouses'] = Warehouse::select('id', 'title')->where('is_active', 1)->get();
        //$this->data['shippingClasses'] = ShippingClass::select('id', 'title')->where('is_active', 1)->get();
        //$this->data['productTypes'] = getProductTypes();
        //$this->data['stockStatuses'] = getProductStockStatuses();
        //$this->data['warrantyPeriodUnits'] = getWarrantyPeriodUnits();
        //$this->data['warrantyTypes'] = getWarrantyTypes();
        //$this->data['licenseTypes'] = getLicenseTypes();

        //$categories = Category::select('id', 'title', 'parent_id')->where('is_active', 1)->get();
        //$this->data['categories'] = getCatsBreadcrumbOptions($categories->toArray());
        
        $this->data['categories']  = Category::select('id', 'title', 'parent_id')->where('is_active', 1)->get();

        return view($this->root . 'add', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all(); // Get validated data

        // Store the file and update the data array
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store($this->data['rpn'], 'public');
        }
        if ($request->hasFile('thumbnail2')) {
            $data['thumbnail2'] = $request->file('thumbnail2')->store($this->data['rpn'], 'public');
        }

        // Save only fillable fields in the database
        $record = Product::create(array_intersect_key($data, array_flip((new Product())->getFillable())));

        return redirect()->route('admin.update-' . $this->data['rsn'], [$record->id])->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        if (!$this->data['row'] = Product::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['active'] = "general";
        $this->data['brands'] = Brand::select('id', 'title')->where('is_active', 1)->get();
        $this->data['warehouses'] = Warehouse::select('id', 'title')->where('is_active', 1)->get();
        $this->data['categories'] = Category::select('id', 'title')->where('is_active', 1)->get();
        $this->data['shippingClasses'] = ShippingClass::select('id', 'title')->where('is_active', 1)->get();
        $this->data['productTypes'] = getProductTypes();
        $this->data['stockStatuses'] = getProductStockStatuses();
        $this->data['warrantyPeriodUnits'] = getWarrantyPeriodUnits();
        $this->data['warrantyTypes'] = getWarrantyTypes();
        $this->data['licenseTypes'] = getLicenseTypes();
        return view($this->root . 'edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product, $id)
    {
        //echo "<pre>";
        //print_r($request->all());

        $data = $request->all();
        $tab = 'general';
        if (($request->tab == 'general')) {
            $request->validate([
                'title' => 'required|unique:products,title,' . $id,
                'slug' => 'required|unique:products,slug,' . $id,
                'category_id' => 'required',
                'price' => 'required',
                'sale_price' => 'required',
            ]);

            // Store the file and update the data array
            if ($request->hasFile('thumbnail')) {
                $data['thumbnail'] = $request->file('thumbnail')->store($this->data['rpn'], 'public');
            } else {
                $data['thumbnail'] = $request->old_thumbnail;
            }
            if ($request->hasFile('thumbnail2')) {
                $data['thumbnail2'] = $request->file('thumbnail2')->store($this->data['rpn'], 'public');
            } else {
                $data['thumbnail2'] = $request->old_thumbnail2;
            }
            if ($request->hasFile('file')) {
                $data['file'] = $request->file('file')->store($this->data['rpn'], 'public');
            } else {
                $data['file'] = $request->old_file;
            }
            // Save only fillable fields in the database
            Product::where('id', $id)->update(array_intersect_key($data, array_flip((new Product())->getFillable())));
        }
        if (($request->tab == 'description')) {
            $tab = 'description';
            $request->validate([
                'excerpt' => 'required',
                'description' => 'required',
            ]);
            Product::where('id', $id)->update(array_intersect_key($data, array_flip((new Product())->getFillable())));
        }

        return redirect()->to(url()->previous() . '?tab=' . $tab)
            ->with([
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
            Product::findOrFail($id)->delete();
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
            Product::withTrashed()->findOrFail($id)->restore();
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
            Product::withTrashed()->findOrFail($id)->forceDelete();
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
