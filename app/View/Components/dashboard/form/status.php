<?php

namespace App\View\Components\dashboard\form;

use Illuminate\View\Component;

class status extends Component
{
    public $status;
    public $name;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $status, string $name, int $id){
        $this->status = $status;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.form.status');
    }
}
