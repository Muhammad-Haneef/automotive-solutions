<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public string $type;
    public string $ref;
    public string $title;
    public mixed $value;
    public int $required;
    public string $class;
    public string $rows;

    public function __construct(
        string $type = "text",
        string $ref = "",
        string $title = "",
        mixed $value = 0,
        int $required = 0,
        string $class = "col-md-12",
        int $rows = 5,
    ) {
        $this->type = $type;
        $this->ref = $ref;
        $this->title = $title;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.textarea', get_object_vars($this));
    }
}
