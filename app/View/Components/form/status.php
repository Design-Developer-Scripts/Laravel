<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class status extends Component
{
    public $status;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $status, string $name){
        $this->status = $status;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.status');
    }
}
