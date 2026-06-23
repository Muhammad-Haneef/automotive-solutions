<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public string $withSubmit;
    public function __construct(bool $withSubmit = true)
    {
        $this->withSubmit = $withSubmit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.card-footer', ['withSubmit'=>$this->withSubmit]);
    }
}
