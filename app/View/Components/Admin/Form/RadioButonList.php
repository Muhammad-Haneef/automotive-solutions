<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioButonList extends Component
{
    /**
     * Create a new component instance.
     */
    public string $ref;
    public string $title;
    public mixed $options;
    public mixed $selected;
    public function __construct(
        string $ref = "",
        string $title = "",
        mixed $options = [],
        mixed $selected = 0,
    ) {

        $this->ref = $ref;
        $this->title = $title;
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.radio-buton-list', get_object_vars($this));
    }
}
