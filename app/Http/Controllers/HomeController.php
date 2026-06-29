<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Banner;

class HomeController extends Controller
{
    private array $data = [];

    public function index()
    {
        $this->data['categories'] = Category::where('parent_id', 0)->with('children')->get();
        return view('home', $this->data);
    }
    public function about()
    {
        return view('about-us');
    }


}
