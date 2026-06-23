<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitBtn extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public string $class;
    public function __construct(string $title = "Submit", string $class = "col-md-12")
    {
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.submit-btn', get_object_vars($this));
    }
}
