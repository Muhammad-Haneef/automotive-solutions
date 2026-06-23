<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;


class AddNewBtn extends Component
{
    public string $route;

    /**
     * Create a new component instance.
     */
    public function __construct(string $route = "")
    {
        $this->route = Route::has('admin.create-' . $route) ? route('admin.create-' . $route) : "#";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.add-new-btn', ['route' => $this->route]);
    }
}


/*
class AddNewBtn extends Component
{
    /**
     * Create a new component instance.
    
    private $route = "";
    public function __construct($route = "")
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
    
    public function render(): View|Closure|string
    {
        
        if(Route::has('admin.create-'.$this->route)){
            $route = route('admin.create-'.$this->route);
        }else{
            $route = "#";
        }
        
        return view('components.admin.add-new-btn', compact('route'));
    }
}
*/