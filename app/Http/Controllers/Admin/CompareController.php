<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Models\Admin\Compare;
use App\Models\Admin\User;
use App\Models\Admin\Product;
use App\Http\Requests\Admin\StoreCompareRequest;
use App\Http\Requests\Admin\UpdateCompareRequest;


class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "admin/compares/";
    private $data;
    public function __construct()
    {
        $this->data = [
            'rows' => [],
            'row' => [],
            'users' => [],
            'products' => [],
            'rsn' => 'compare', // route singular name
            'rpn' => 'compares', // route plural name
        ];
    }

    public function index()
    {
        $this->data['users'] = User::all();
        $this->data['products'] = Product::all();
        $this->data['rows'] = Compare::all();
        return view($this->root . 'list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->root . 'list', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompareRequest $request)
    {
        Compare::create($request->only((new Compare())->getFillable()));
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compare $compare, $id)
    {
        if (!$this->data['row'] = Compare::find($id)) {
            return redirect()->route($this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }
        $this->data['users'] = User::all();
        $this->data['products'] = Product::all();
        $this->data['rows'] = Compare::all();
        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompareRequest $request, Compare $compare, $id)
    {
        Compare::where('id', $id)->update($request->only((new Compare())->getFillable()));
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
            Compare::findOrFail($id)->delete();
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
            Compare::withTrashed()->findOrFail($id)->restore();
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
            Compare::withTrashed()->findOrFail($id)->forceDelete();
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
