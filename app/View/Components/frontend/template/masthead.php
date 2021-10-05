<?php

namespace App\View\Components\frontend\template;

use Illuminate\View\Component;

class masthead extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.template.masthead');
    }
}
