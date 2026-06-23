<?php

namespace App\View\Components\Admin\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class Editor extends Component
{
    /**
     * Create a new component instance.
     */
    public string $ref;
    public string $title;
    public mixed $content;
    public int $rows;
    public function __construct(
        string $ref = "",
        string $title = "",
        mixed $content = "",
        int $rows = 15
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->content = $content;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.form.editor', get_object_vars($this));
    }
}
