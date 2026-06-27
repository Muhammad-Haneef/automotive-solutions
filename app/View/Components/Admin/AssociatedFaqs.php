<?php

namespace App\View\Components\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class AssociatedFaqs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $associated_type = request()->segment(2) ?? '';
        $associated_id = request()->segment(4) ?? 0;
        return view('components.admin.associated-faqs', compact('associated_type', 'associated_id'));
    }
}
