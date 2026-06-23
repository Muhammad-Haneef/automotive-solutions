<?php

namespace App\Services;

use App\Models\Admin\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartService
{
    // ─── Get identifier ──────────────────────────────
    private function userId()   { return Auth::id(); }
    private function sessionId(){ return Session::getId(); }

    // ─── Base query ──────────────────────────────────
    private function query()
    {
        if (Auth::check()) {
            return Cart::where('user_id', $this->userId());
        }
        return Cart::where('session_id', $this->sessionId());
    }

    // ─── Get all cart items ───────────────────────────
    public function getItems()
    {
        return $this->query()->with('product', 'variation')->get();
    }

    // ─── Get count ───────────────────────────────────
    public function getCount()
    {
        return $this->query()->sum('quantity');
    }

    // ─── Get total ───────────────────────────────────
    public function getTotal()
    {
        return $this->query()->get()->sum(fn($item) => $item->line_total);
    }

    // ─── Add to cart ─────────────────────────────────
    public function add($productId, $quantity = 1, $variationId = null, $options = [])
    {
        $product = Product::findOrFail($productId);

        $query = $this->query()
                      ->where('product_id', $productId)
                      ->where('variation_id', $variationId);

        $existing = $query->first();

        if ($existing) {
            $existing->increment('quantity', $quantity);
            return $existing;
        }

        return Cart::create([
            'user_id'      => Auth::id(),
            'session_id'   => Auth::check() ? null : $this->sessionId(),
            'product_id'   => $productId,
            'variation_id' => $variationId,
            'quantity'     => $quantity,
            'price'        => $product->price,
            'sale_price'   => $product->sale_price,
            'options'      => $options,
        ]);
    }

    // ─── Update quantity ─────────────────────────────
    public function update($cartId, $quantity)
    {
        $item = $this->query()->findOrFail($cartId);

        if ($quantity <= 0) {
            $item->delete();
            return null;
        }

        $item->update(['quantity' => $quantity]);
        return $item;
    }

    // ─── Remove item ─────────────────────────────────
    public function remove($cartId)
    {
        return $this->query()->where('id', $cartId)->delete();
    }

    // ─── Clear cart ──────────────────────────────────
    public function clear()
    {
        return $this->query()->delete();
    }

    // ─── Merge session cart into DB on login ─────────
    public function mergeSessionCart()
    {
        $sessionItems = Cart::where('session_id', $this->sessionId())->get();

        foreach ($sessionItems as $sessionItem) {
            $existing = Cart::where('user_id', $this->userId())
                            ->where('product_id', $sessionItem->product_id)
                            ->where('variation_id', $sessionItem->variation_id)
                            ->first();
            if ($existing) {
                $existing->increment('quantity', $sessionItem->quantity);
                $sessionItem->delete();
            } else {
                $sessionItem->update([
                    'user_id'    => $this->userId(),
                    'session_id' => null,
                ]);
            }
        }
    }
}