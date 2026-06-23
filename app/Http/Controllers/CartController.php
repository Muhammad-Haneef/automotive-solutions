<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Services\CartService;

use App\Models\Cart;
use App\Models\Admin\Product;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $root = "carts/";
    private $data;
    public function __construct(protected CartService $cart)
    {
        $this->data = [
            'rows' => Cart::latest()->withTrashed()->get(),
            'row' => [],
            'rsn' => 'cart', // route singular name
            'rpn' => 'carts', // route plural name
        ];
    }

    public function index()
    {
        return view($this->root . 'list', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found.',
                'alertType' => 'error'
            ]);
        }

        // Check existing cart item
        $cart = Cart::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->where('variation_id', $request->variation_id) // dynamic later
            ->first();

        if ($cart) {

            // Update quantity
            $cart->increment('quantity', 1);

            // Optional:
            // update latest price
            $cart->update([
                'price' => $product->price,
                'sale_price' => $product->sale_price,
            ]);
        } else {

            // Create new cart item
            Cart::create([
                'user_id'      => auth()->id(),
                'product_id'   => $product->id,
                'variation_id' => $request->variation_id,
                'quantity'     => 1,
                'price'        => $product->price,
                'sale_price'   => $product->sale_price,
                'options'      => json_encode([]),
                'session_id'   => session()->getId(),
            ]);
        }

        return response()->json([
            'message' => 'Cart updated successfully.',
            'count' => cartCount(),
            'alertType' => 'success'
        ]);
    }


    public function dropdown()
    {
        return view('cart-dropdown');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart, $id)
    {
        Cart::where('id', $id)->update($request->only((new Cart())->getFillable()));
        return redirect()->route($this->data['rpn'])->with([
            'message' => 'Saved successfully.',
            'alertType' => 'success'
        ]);
    }

    public function remove($cartId)
    {
        $this->cart->remove($cartId);

        $items    = $this->cart->getItems();
        $subtotal = $items->sum(fn($i) => $i->effective_price * $i->quantity);

        return response()->json([
            'status'   => 'removed',
            'count'    => cartCount(),
            'subtotal' => number_format($subtotal, 2),
            'total'    => number_format($subtotal, 2), // add shipping/tax logic if needed
            'message'  => 'Item removed from cart.',
        ]);
    }
}
