<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoFields extends Component
{
    /**
     * Create a new component instance.
     */
    public mixed $title;
    public mixed $keywords;
    public mixed $description;
    public function __construct(
        mixed $title = "",
        mixed $keywords = "",
        mixed $description = "",
    ) {
        $this->title = $title;
        $this->keywords = $keywords;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.seo-fields', get_object_vars($this));
    }
}
