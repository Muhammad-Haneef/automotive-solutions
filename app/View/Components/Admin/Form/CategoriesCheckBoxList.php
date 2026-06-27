<?php

namespace App\View\Components\Admin\Form;

use App\Models\Admin\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class CategoriesCheckBoxList extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;

    public $selected;

    public function __construct($selected = [])
    {
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::select('id', 'title', 'parent_id')->where('is_active', 1)->get();
        $this->data['categories'] = getCatsBreadcrumbOptions($categories->toArray());
        $this->data['selected'] = $this->selected;
        return view('components.admin.form.categories-check-box-list', $this->data);
    }
}
