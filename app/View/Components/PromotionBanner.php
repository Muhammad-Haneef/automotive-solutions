<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Admin\Banner;

class PromotionBanner extends Component
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
        $banner = Banner::where('id', 2)->where('is_active', 1)->with(['images'])->first();
        return view('components.promotion-banner', compact('banner'));
    }
}
