<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class CardHeader extends Component
{
    public string $title;
    public string $route;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title = "", string $route = "")
    {
        $this->title = $title;
        $this->route = Route::has($route) ? route($route) : "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.card-header', [
            'title' => $this->title, 
            'route' => $this->route
        ]);
    }
}
