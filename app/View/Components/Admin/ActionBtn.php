<?php

namespace App\View\Components\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Closure;

class ActionBtn extends Component
{
    public string $route;
    public int $id;
    public int $privilegeEditId;
    public int $privilegeDeleteId;
    public int $privilegeRestoreId;
    public string $showUrl;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $route = '',
        int $id = 0,
        int $privilegeEditId = 0,
        int $privilegeDeleteId = 0,
        int $privilegeRestoreId = 0,
        string $showUrl = '',
    ) {
        $this->route = $route;
        $this->id = $id;
        $this->privilegeEditId = $privilegeEditId;
        $this->privilegeDeleteId = $privilegeDeleteId;
        $this->privilegeRestoreId = $privilegeRestoreId;
        $this->showUrl = $showUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.action-btn', get_object_vars($this));
    }
}
