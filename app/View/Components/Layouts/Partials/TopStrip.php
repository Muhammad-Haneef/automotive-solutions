<?php

namespace App\View\Components\Layouts\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Admin\Banner;

class TopStrip extends Component
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
        $this->data['banner'] = Banner::where('banner_location_id', 4)->with('images')->get();
        return view('components.layouts.partials.top-strip', $this->data);
    }
}
