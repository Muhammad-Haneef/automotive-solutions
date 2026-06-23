<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Wishlist;
use App\Models\Admin\Compare;


class ProductsController extends Controller
{
    /*
    public function index(Request $request)
    {
        //print_r($request->all());
        $filters = [
            'search'     => $request->search,
            'category' => $request->category ? (array) $request->category : [],
            'brand'      => $request->brand ?? [],
            'price_min'  => $request->price_min,
            'price_max'  => $request->price_max,
            'sort'       => $request->sort,
            'view'       => $request->view,
            'per_page'   => $request->per_page ?? 12,
            'wishlist'   => getWishlist(),
            'compare'   => getCompare(),
        ];
        session(['product_filters' => $filters]);

        $data = Product::paginate($filters['per_page']); // Fetch products based on filters (not implemented here)
        return view('products/list', compact('filters', 'data'));
    }
    */

    public function index(Request $request)
    {
        $filters = [
            'search'    => $request->search,
            'category'  => $request->category ? (array) $request->category : [],
            'brand'     => $request->brand ?? [],
            'price_min' => $request->price_min,
            'price_max' => $request->price_max,
            'sort'      => $request->sort,
            'view'      => $request->view,
            'per_page'  => $request->per_page ?? 12,
            'wishlist'  => getWishlist(),
            'compare'   => getCompare(),
        ];

        session(['product_filters' => $filters]);
        $query = Product::where('is_active', 1)
            ->when(!empty(array_filter((array) $request->category)), fn($q) => $q->whereIn('category_id', array_filter((array) $request->category)))
            ->when($request->brand,    fn($q) => $q->where('brand_id', $request->brand))
            ->when($request->search,   fn($q) => $q->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($request->search) . '%']))
            ->when($request->sort, function ($q) use ($request) {
                match ($request->sort) {
                    'price_asc'  => $q->orderBy('price', 'asc'),
                    'price_desc' => $q->orderBy('price', 'desc'),
                    'newest'     => $q->orderBy('created_at', 'desc'),
                    'featured'   => $q->where('featured', 1),
                    //default      => $q->orderBy('sort_by', 'asc'),
                    default      => $q->orderBy('id', 'desc'),
                };
            });

        //dd(Product::whereRaw('LOWER(title) LIKE ?', ['%Band%'])->where('is_active', 1)->get());

        $products = $query->paginate($request->per_page ?? 12);


        if ($request->ajax()) {
            return response()->json([
                'html'     => view('products.partials.product-cards', compact('products'))->render(),
                'hasMore'  => $products->hasMorePages(),
                'total'    => $products->total(),
                'loaded'   => $products->lastItem() ?? 0,
                'nextPage' => $products->currentPage() + 1,
            ]);
        }

        return view('products/list', compact('products', 'filters'));
    }

    public function show()
    {
        return view('products/show');
    }

    public function wishlistToggle(Request $request)
    {
        if (!auth()->check()) {
            return response()->json([
                'status'    => 'removed',
                'alertType' => 'warning',
                'count'     => 0,
                'message'   => 'Please login to manage your wishlist.',
            ]);
        }

        $exists = Wishlist::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($exists) {
            $exists->forceDelete();
            $status    = 'removed';
            $message   = 'Removed from wishlist';
            $alertType = 'success';
        } else {
            Wishlist::create([
                'user_id'    => auth()->id(),
                'product_id' => $request->product_id,
            ]);
            $status    = 'added';
            $message   = 'Added to wishlist';
            $alertType = 'success';
        }

        return response()->json([
            'status'    => $status,
            'alertType' => $alertType,
            'count'     => count(getWishlist()),
            'message'   => $message,
        ]);
    }

    public function compareToggle(Request $request)
    {
        if (!auth()->check()) {
            return response()->json([
                'status'    => 'removed',
                'alertType' => 'warning',
                'count'     => 0,
                'message'   => 'Please login to manage your compare list.',
            ]);
        }

        $exists = Compare::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($exists) {
            $exists->forceDelete();
            $status    = 'removed';
            $message   = 'Removed from compare list';
            $alertType = 'success';
        } else {
            Compare::create([
                'user_id'    => auth()->id(),
                'product_id' => $request->product_id,
            ]);
            $status    = 'added';
            $message   = 'Added to compare list';
            $alertType = 'success';
        }

        return response()->json([
            'status'    => $status,
            'alertType' => $alertType,
            'count'     => count(getCompare()),
            'message'   => $message,
        ]);
    }
}
