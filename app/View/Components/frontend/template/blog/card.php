<?php

namespace App\View\Components\frontend\template\blog;

use Illuminate\View\Component;

class card extends Component
{
    public $slug;
    public $image;
    public $title;
    public $subline;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $slug, string $image, string $title, string $subline)
    {
        $this->slug = $slug;
        $this->image = $image;
        $this->title = $title;
        $this->subline = $subline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.template.blog.card');
    }
}
