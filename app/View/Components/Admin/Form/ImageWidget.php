<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageWidget extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public string $oldImage;
    public string $ref;
    public function __construct(
        string $title = "Image",
        string $oldImage = "",
        string $ref = "",
    ) {
        $this->title = $title;
        $this->oldImage = $oldImage;
        $this->ref = $ref;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.image-widget', get_object_vars($this));
    }
}