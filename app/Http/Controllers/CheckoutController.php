<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
    public function cart()
    {
        return view('cart');
    }
    public function ThankYou()
    {
        return view('thank-you');
    }

}
