<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Admin\Blog;

class BlogCards extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public $title;
    public $description;
    public $viewAllLink;
    public function __construct($data = [], $title = null, $description = null, $viewAllLink = null)
    {
        $this->data = $data;
        $this->title = $title;
        $this->description = $description;
        $this->viewAllLink = $viewAllLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if(!$this->data || count($this->data) == 0){
            $this->data = Blog::where('is_active', 1)->orderBy('created_at', 'desc')->take(4)->get();
        }
        return view('components.blog-cards', get_object_vars($this));
    }
}
