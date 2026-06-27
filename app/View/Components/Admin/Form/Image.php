<?php

namespace App\View\Components\Admin\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class Image extends Component
{
    /**
     * Create a new component instance.
     */
    public string $ref;

    public string $preview;
    public string $index;

    public function __construct(string $ref, string $preview, string $index = '0')
    {
        $this->ref = $ref;
        $this->preview = $preview;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.image', get_object_vars($this));
    }
}
