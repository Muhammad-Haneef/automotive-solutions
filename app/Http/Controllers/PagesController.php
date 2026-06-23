<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function contact()
    {
        return view('pages/contact');
    }
    public function about()
    {
        return view('pages/about');
    }
    
    public function affiliate()
    {
        return view('pages/affiliate');
    }

    public function deliveryInformation()
    {
        return view('pages/delivery-information');
    }

    public function privacyPolicy()
    {
        return view('pages/privacy-policy');
    }

    public function termsConditions()
    {
        return view('pages/terms-conditions');
    }

    public function returnPolicy()
    {
        return view('pages/return-policy');
    }
}
