<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class ActionBtn extends Component
{
    public string $route;
    public int $id;
    public int $privilegeEditId;
    public int $privilegeDeleteId;
    public int $privilegeRestoreId;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $route = "",
        int $id = 0,
        int $privilegeEditId = 0,
        int $privilegeDeleteId = 0,
        int $privilegeRestoreId = 0
    ) {
        $this->route = $route;
        $this->id = $id;
        $this->privilegeEditId = $privilegeEditId;
        $this->privilegeDeleteId = $privilegeDeleteId;
        $this->privilegeRestoreId = $privilegeRestoreId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.action-btn', get_object_vars($this));
    }
}
