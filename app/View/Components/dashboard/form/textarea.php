<?php

namespace App\View\Components\dashboard\form;

use Illuminate\View\Component;

class textarea extends Component
{
    public $title;
    public $option;
    public $name;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title,bool $option, string $name, string $value)
    {
        $this->title = $title;
        $this->option = $option;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.form.textarea');
    }
}
