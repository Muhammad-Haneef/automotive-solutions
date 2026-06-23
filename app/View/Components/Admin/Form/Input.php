<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $type;
    public string $ref;
    public string $title;
    public mixed $value;
    public int $required;
    public string $class;
    public bool $readonly;
    public string $exinfo;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = "text",
        string $ref = "",
        string $title = "",
        mixed $value = 0,
        int $required = 0,
        string $class = "col-md-12",
        bool $readonly = false,
        string $exinfo = ""
    ) {
        $this->type = $type;
        $this->ref = $ref;
        $this->title = $title;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
        $this->readonly = $readonly;
        $this->exinfo = $exinfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.input', get_object_vars($this));
    }
}



/*
class Input extends Component
{
    /**
     * Create a new component instance.
    
    private $type = "text";
    private $ref = "";
    private $title = "";
    private $value = 0;
    private $required = 0;
    private $class = "col-md-4";
    public function __construct($type = "text", $ref = "", $title = "",  $value = 0, $required = 0, $class = "col-md-4")
    {
        $this->type = $type;
        $this->ref = $ref;
        $this->title = $title;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
    
    public function render(): View|Closure|string
    {
        return view('components.admin.form.input', [
            'type' => $this->type,
            'ref' => $this->ref,
            'title' => $this->title,
            'value' => $this->value,
            'required' => $this->required,
            'class' => $this->class,
        ]);
    }
}
*/
