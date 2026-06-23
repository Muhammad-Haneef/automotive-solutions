<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public string $ref;
    public string $title;
    public mixed $options;
    public mixed $selected;
    public int $required;
    public string $class;
    public string $field;
    public string $onchange;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $ref = "",
        string $title = "",
        mixed $options = [],
        mixed $selected = 0,
        int $required = 0,
        string $class = "col-md-12",
        string $field = "title",
        string $onchange=""
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->options = $options;
        $this->selected = $selected;
        $this->required = $required;
        $this->class = $class;
        $this->field = $field;
        $this->onchange = $onchange;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.dropdown', get_object_vars($this));
    }
}

/*
class Dropdown extends Component
{
    /**
     * Create a new component instance.
     
    private $ref = "";
    private $title = "";
    private $options = [];
    private $selected = 0;
    private $required = 0;
    private $class = "col-md-4";
    public function __construct($ref = "", $title = "", $options = [],  $selected = 0, $required = 0, $class = "col-md-4")
    {
        $this->ref = $ref;
        $this->title = $title;
        $this->options = $options;
        $this->selected = $selected;
        $this->required = $required;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
    
    public function render(): View|Closure|string
    {
        return view('components.admin.form.dropdown', [
            'ref' => $this->ref,
            'title' => $this->title,
            'options' => $this->options,
            'selected' => $this->selected,
            'required' => $this->required,
            'class' => $this->class,
        ]);
    }
}
*/
