<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOfferRequest;
use App\Http\Requests\Admin\UpdateOfferRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Offer;
use App\Models\Admin\OfferItem;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use Laravel\Pail\ValueObjects\Origin\Console;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = 'admin/Offers/';

    private $data = [
        'rows' => [],
        'row' => [],
        'xItems' => [],
        'selected' => [],
        'rsn' => 'offer',  // route singular name
        'rpn' => 'offers',  // route plural name
    ];

    public function index()
    {
        $this->data['rows'] = Offer::latest()->withTrashed()->get();
        return view($this->root . 'list', $this->data);
    }

    public function getOfferItemsByType($id = 0, $jsonResponse = 1)
    {
        $models = [
            1 => Product::class,
            2 => Brand::class,
            3 => Category::class,
        ];
        $items = isset($models[$id]) ? $models[$id]::all() : collect([]);
        return $jsonResponse ? response()->json($items) : $items;
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
    public function store(StoreOfferRequest $request)
    {
        $data = $request->all();  // Get validated data
        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
        }
        // Save only fillable fields in the database
        $record = Offer::create(array_intersect_key($data, array_flip((new Offer())->getFillable())));
        if ($data['offer_items']) {
            foreach ($data['offer_items'] as $item) {
                OfferItem::create(['offer_id' => $record->id, 'item_id' => $item]);
            }
        }
        return back()->with([
            'message' => 'Saved successfully.',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer, $id)
    {
        $offer = Offer::with('items')->find($id);

        if (!$offer) {
            return redirect()->route('admin.' . $this->data['rpn'])->with([
                'message' => 'Record not found.',
                'alert-type' => 'error'
            ]);
        }

        $this->data['row'] = $offer;
        $this->data['xItems'] = $this->getOfferItemsByType($offer->offer_scope, 0);
        $this->data['xSelected'] = $offer->items->pluck('item_id')->toArray();  // Optimized selection extraction

        // echo "<pre>"; print_r($this->data); exit();

        return view($this->root . 'form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer, $id)
    {
        $data = $request->all();  // Get validated data
        // Store the file and update the data array
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store($this->data['rpn'], 'public');
            deleteImage($request->old_image);
        } else {
            $data['image'] = $request->old_image;
        }
        // Save only fillable fields in the database
        Offer::where('id', $id)->update(array_intersect_key($data, array_flip((new Offer())->getFillable())));
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
            Offer::findOrFail($id)->delete();
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
            Offer::withTrashed()->findOrFail($id)->restore();
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
            Offer::withTrashed()->findOrFail($id)->forceDelete();
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
