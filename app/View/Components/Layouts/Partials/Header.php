<?php

namespace App\View\Components\Layouts\Partials;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Admin\Category;

class Header extends Component
{
    public $categories;
    public $menu;
    public $cart;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Load top-level categories with their children
        $this->categories = Category::select('id', 'title', 'slug')->where('parent_id', 0)->with('children')->get();
        $this->menu = ['shop' => 'Shop', 'about' => 'About', 'blog' => 'Blog', 'contact' => 'Contact'];
        // Load cart from session
        $this->cart = session('cart', []);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.layouts.partials.header');
    }
}
