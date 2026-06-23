<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductEditPills extends Component
{
    /**
     * Create a new component instance.
     */
    public string $active;
    public mixed $pid;
    public function __construct(string $active = "", mixed $pid=0)
    {
        $this->active = $active;
        $this->pid = $pid;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.product-edit-pills', get_object_vars($this));
    }
}
