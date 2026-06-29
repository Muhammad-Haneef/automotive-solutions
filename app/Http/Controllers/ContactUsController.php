<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\FaqCategory;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contact-us');
    }
}
